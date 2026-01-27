<?php
/**
 * Template Name: Homepage2
 * Description: Custom homepage template
 */

get_header(); ?>

<div id="homepage-content2">
    <main id="primary" class="site-main">
        <!-- ===bannner section start=== -->
        <section id="homepageBannerSection2">
            <div id="homeBanner2">
                <div class="bannervideo2">
                    <video
                        src="http://localhost/circulartechg/wp-content/uploads/2026/01/b55bbc9498fc4a93bfc64fc81724bdd9.mp4"
                        autoplay muted loop></video>
                </div>
                <div class="bannerContent2">
                    <h1>Meet Canopy</h1>
                    <h2>
                        You asked for a mask <br>
                        that would make a world of difference. <br>
                        Together, we made it.
                    </h2>
                </div>
                <div class="bannerImage2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bannerImage1.webp"
                        alt="bannerImage">
                </div>
            </div>
        </section>
        <!-- ===bannner section end=== -->

        <!-- ======video introduction section start====== -->
        <section id="videoIntroductionSection2">
            <!-- ----videos---- -->
            <div id="videoAnimationWrapper2">

                <div class="videoContainer1 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrolllvideo1.mp4"
                        muted></video>
                </div>
                <div class="videoContainer2 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit1.mp4"
                        muted></video>
                </div>
                <div class="videoContainer3 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit2.mp4"
                        muted></video>
                </div>
                <div class="videoContainer4 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit3.mp4"
                        muted></video>
                </div>
                <div class="videoContainer5 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit4.mp4"
                        muted></video>
                </div>
                <div class="videoContainer6 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Design1.mp4"
                        muted></video>
                </div>
            </div>
            <!-- ----videos---- -->
        </section>

    </main>
</div>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>


<!-- 
<script>
(function() {
    if (!window.gsap || !window.ScrollTrigger) return;

    gsap.registerPlugin(ScrollTrigger);

    const wrapper = document.getElementById("videoAnimationWrapper2");

    const sections = [{
            container: document.querySelector(".videoContainer1"),
            video: document.querySelector(".videoContainer1 video")
        },
        {
            container: document.querySelector(".videoContainer2"),
            video: document.querySelector(".videoContainer2 video")
        },
        {
            container: document.querySelector(".videoContainer3"),
            video: document.querySelector(".videoContainer3 video")
        },
        {
            container: document.querySelector(".videoContainer4"),
            video: document.querySelector(".videoContainer4 video")
        },
        {
            container: document.querySelector(".videoContainer5"),
            video: document.querySelector(".videoContainer5 video")
        },
        {
            container: document.querySelector(".videoContainer6"),
            video: document.querySelector(".videoContainer6 video")
        }
    ];


    Promise.all(
        sections.map(s =>
            new Promise(resolve => {
                if (s.video.readyState >= 1) resolve();
                else s.video.addEventListener("loadedmetadata", resolve, {
                    once: true
                });
            })
        )
    ).then(() => {


        sections.forEach(s => {
            s.video.pause();
            s.video.muted = true;
            s.video.playsInline = true;
            s.video.currentTime = 0;

            gsap.set(s.container, {
                position: "absolute",
                top: 0,
                left: 0,
                width: "100%",
                height: "100%",
                opacity: 0
            });
        });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: wrapper,
                start: "top top",
                end: "+=4800",
                scrub: true,
                pin: true,
                markers: true
            }
        });

        sections.forEach(s => {
            gsap.set(s.container, {
                opacity: 0
            });
        });
        gsap.set(sections[0].container, {
            opacity: 1
        });

        sections.forEach((s, i) => {
            const scrub = {
                t: 0
            };
            sections.forEach(s => {
                gsap.set(s.container, {
                    opacity: 0
                });
                });

            tl.set(s.container, {
                opacity: 1
            });

            tl.to(scrub, {
                t: s.video.duration,
                duration: 1,
                ease: "none",
                onUpdate: () => {
                    s.video.currentTime = scrub.t;
                    if (i === sections.length - 1) {
                        const moveX = (scrub.t / s.video.duration) * 500;
                        s.container.style.transform = `translateX(${moveX}px)`;
                    } else {
                        s.container.style.transform = `translateX(0px)`;
                    }
                },
                onComplete: () => {
                    console.log(sections);
                }
            });

            if (i === sections.length - 1) {
                tl.fromTo(s.container, {
                    x: 0
                }, {
                    x: 400,
                    duration: 1
                }, ">");
            }
        });


    });
})();
</script> -->