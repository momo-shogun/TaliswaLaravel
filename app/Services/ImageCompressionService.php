<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Compress uploaded images with minimal quality loss.
 * Uses PHP GD: resizes if too large, saves as JPEG for smaller size.
 */
class ImageCompressionService
{
    /** Max dimension (width or height) – resize only if larger. */
    public const MAX_DIMENSION = 1600;

    /** JPEG quality 0–100. 80 = good balance of quality and file size. */
    public const JPEG_QUALITY = 80;

    /**
     * Compress image and store in the given directory (e.g. 'team-members', 'winery-slides').
     * Returns the stored path (e.g. 'team-members/abc123.jpg').
     *
     * @throws \RuntimeException If GD is not available or image cannot be processed.
     */
    public function compressAndStore(UploadedFile $file, string $directory): string
    {
        if (! extension_loaded('gd')) {
            throw new \RuntimeException('PHP GD extension is required for image compression.');
        }

        $path = $file->getRealPath();
        $imageInfo = @getimagesize($path);
        if ($imageInfo === false) {
            throw new \RuntimeException('Invalid or unsupported image file.');
        }

        $resource = $this->createImageResource($path, $imageInfo[2]);
        if ($resource === false) {
            throw new \RuntimeException('Could not load image for compression.');
        }

        // PNG/WebP transparency → fill with white before converting to JPEG (otherwise black)
        if ($imageInfo[2] === IMAGETYPE_PNG || $imageInfo[2] === IMAGETYPE_WEBP) {
            $resource = $this->flattenTransparency($resource);
        }

        $width = imagesx($resource);
        $height = imagesy($resource);

        // Resize if larger than MAX_DIMENSION (keeps aspect ratio, minimal quality impact)
        if ($width > self::MAX_DIMENSION || $height > self::MAX_DIMENSION) {
            $resource = $this->resizeProportional($resource, $width, $height, self::MAX_DIMENSION);
        }

        $filename = Str::random(40) . '.jpg';
        $relativePath = $directory . '/' . $filename;
        $fullPath = Storage::disk('public')->path($relativePath);

        // Ensure directory exists
        $dir = dirname($fullPath);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        // Save as JPEG with high quality – small size, minimal visible loss
        $saved = imagejpeg($resource, $fullPath, self::JPEG_QUALITY);
        imagedestroy($resource);

        if (! $saved) {
            throw new \RuntimeException('Failed to save compressed image.');
        }

        return $relativePath;
    }

    private function createImageResource(string $path, int $type): \GdImage|false
    {
        return match ($type) {
            IMAGETYPE_JPEG => imagecreatefromjpeg($path),
            IMAGETYPE_PNG => imagecreatefrompng($path),
            IMAGETYPE_GIF => imagecreatefromgif($path),
            IMAGETYPE_WEBP => imagecreatefromwebp($path),
            default => false,
        };
    }

    /** Flatten transparency onto white background so JPEG looks correct. */
    private function flattenTransparency(\GdImage $image): \GdImage
    {
        $width = imagesx($image);
        $height = imagesy($image);
        $flat = imagecreatetruecolor($width, $height);
        if ($flat === false) {
            return $image;
        }
        $white = imagecolorallocate($flat, 255, 255, 255);
        imagefill($flat, 0, 0, $white);
        imagecopy($flat, $image, 0, 0, 0, 0, $width, $height);
        imagedestroy($image);

        return $flat;
    }

    private function resizeProportional(\GdImage $image, int $width, int $height, int $maxDimension): \GdImage
    {
        if ($width <= $maxDimension && $height <= $maxDimension) {
            return $image;
        }

        $ratio = min($maxDimension / $width, $maxDimension / $height);
        $newWidth = (int) round($width * $ratio);
        $newHeight = (int) round($height * $ratio);

        $resized = imagecreatetruecolor($newWidth, $newHeight);
        if ($resized === false) {
            return $image;
        }

        imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagedestroy($image);

        return $resized;
    }
}
