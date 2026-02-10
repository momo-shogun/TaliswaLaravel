// Brand Experience Carousel using GSAP

document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP is not loaded');
        return;
    }

    const productWrapper = document.querySelector('.brand-carousel--product-wrapper');
    const productImg = document.querySelector('.brand-carousel--product');
    const flowerWrapper = document.querySelector('.brand-carousel--flower-wrapper');
    const flowerImg = document.querySelector('.brand-carousel--flower');

    if (!productWrapper || !productImg || !flowerWrapper || !flowerImg) {
        console.warn('Carousel elements not found');
        return;
    }

    // Register ScrollTrigger plugin
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    // Set initial states
    gsap.set(productImg, {
        scale: 0.8,
        opacity: 0,
        y: 50
    });

    gsap.set(flowerImg, {
        scale: 0.8,
        opacity: 0,
        y: 50,
        rotation: -10
    });

    // Create timeline for carousel animation
    const carouselTl = gsap.timeline({
        scrollTrigger: {
            trigger: '.brand-experience-carousel',
            start: 'top 80%',
            end: 'bottom 20%',
            scrub: 1,
            pin: true,
            anticipatePin: 1
        }
    });

    // Animate product image (left side)
    carouselTl.to(productImg, {
        scale: 1,
        opacity: 1,
        y: 0,
        duration: 1,
        ease: 'power2.out'
    }, 0);

    // Animate flower image (right side)
    carouselTl.to(flowerImg, {
        scale: 1,
        opacity: 1,
        y: 0,
        rotation: 0,
        duration: 1,
        ease: 'power2.out'
    }, 0.2);

    // Continuous rotation animation for flower
    gsap.to(flowerImg, {
        rotation: 360,
        duration: 20,
        ease: 'none',
        repeat: -1
    });

    // Subtle floating animation for product
    gsap.to(productImg, {
        y: -20,
        duration: 2,
        ease: 'sine.inOut',
        yoyo: true,
        repeat: -1
    });

    // Parallax effect on scroll
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.to(productImg, {
            y: -100,
            scrollTrigger: {
                trigger: '.brand-experience-carousel',
                start: 'top top',
                end: 'bottom top',
                scrub: true
            }
        });

        gsap.to(flowerImg, {
            y: -80,
            rotation: 15,
            scrollTrigger: {
                trigger: '.brand-experience-carousel',
                start: 'top top',
                end: 'bottom top',
                scrub: true
            }
        });
    }
});
