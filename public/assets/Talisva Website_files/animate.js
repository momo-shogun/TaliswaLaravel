// use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {

    gsap.to("#HEADER_BIRD", { 
        y: -30,
        duration: 1.2,
        ease: "sine.inOut",
        yoyo: true,
        repeat: -1 
    });
    gsap.to("#HEADER_BIRD", {
        x: "random(-2, 2)",
        rotation: "random(-0.8, 0.8)",
        duration: 0.15,
        ease: "power1.inOut",
        repeat: -1,
        repeatRefresh: true
    });


    gsap.to("#HEADER_BEE_1", { 
        y: -15,
        duration: 2,
        ease: "sine.inOut",
        yoyo: true,
        repeat: -1 
    });
    gsap.to("#HEADER_BEE_1", {
        x: "random(-3, 3)",
        rotation: "random(-0.8, 0.8)",
        duration: 0.15,
        ease: "power1.inOut",
        repeat: -1,
        repeatRefresh: true
    });

      gsap.to("#HEADER_BEE_2", { 
        y: -25,
        duration: 0.8,
        ease: "sine.inOut",
        yoyo: true,
        repeat: -1 
    });
    gsap.to("#HEADER_BEE_2", {
        x: "random(-3, 3)",
        rotation: "random(-0.8, 0.8)",
        duration: 0.15,
        ease: "power1.inOut",
        repeat: -1,
        repeatRefresh: true
    });


    

 });