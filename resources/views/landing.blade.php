<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="A modern, collaborative platform of stories for children of all ages, revolving around the important topics of today.">
    <meta name="keywords"
          content="dot, children stories, story, wings, careers, goals, parenting, art, collaboration, change, message">
    <link rel="stylesheet" href="/css/app.css">
    <title>The Dot Express</title>
</head>
<body>
<nav>
    <div class="navbar flex items-center justify-between">
        <div class="brand block">
            <img src="/static/tde_logo_color.png" alt="The Dot Express">
        </div>
        <div class="left-links block flex-grow">
            <a href="/" class="nav-link block lg:inline-block">Platform</a>
            <a href="/" class="nav-link block lg:inline-block">Book</a>
            <a href="/" class="nav-link block lg:inline-block">About</a>
        </div>

        {{--<div class="block lg:hidden">--}}
        {{--<button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">--}}
        {{--<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>--}}
        {{--</button>--}}
        {{--</div>--}}

        <div class="block">
            <a href="/" class="nav-link block lg:inline-block">Buy the Book</a>
            <a href="/" class="nav-link block lg:inline-block">Contact Us</a>
        </div>
    </div>
</nav>
<main>
    <section id="hero-section">
        <div class="container">
            <div class="header-illustration">
                <img src="/static/illustrations/endingAsset.svg" alt="Freedom for Children">
            </div>
            <h1 class="h3">Introducing</h1>
            <div class="mb-2"></div>
            <h1 class="hidden">The Dot Express</h1>
            <div class="logo-container">
                <img src="/static/tde_logo_color.png" alt="The Dot Express">
            </div>

            <h2 class="h3">A place to
                <span class="eve-h2 h2 secondary-2">Explore</span>,
                <span class="eve-h2 h2 secondary-1">Voice</span>, &
                <span class="eve-h2 h2 secondary-3">Experience</span>.
            </h2>
            <div class="mb-4">

            </div>
            <p class="sub-text max-w-4xl">
                Through storytelling, this platform gives you the golden ticket to a world of stories, ideas and
                perspectives, and
                show you that ‘If you can see it, you can be it!’
            </p>
            <p class="h3 primary-color">Coming Soon!</p>
        </div>

    </section>

    <section id="platform-introduction">
        <div class="container">
            <div class="platform-point flex flex-wrap flex-row-reverse">
                <div class="illustration w-4/12">
                    <div class="illustration-container">
                        <img src="/static/illustrations/storytellingAsset.svg" alt="Storytelling is powerful">
                    </div>
                </div>
                <div class="text-content w-8/12">
                    <h3 class="h2">Storytelling as a powerful medium of expression.</h3>
                    <p class="sub-text">From granny’s tales to bedtime stories, didn’t every story leave you with a
                        message? Now with the Dot Express, you get to read hundreds of inspiring stories that will help
                        transform your personality and outlook. </p>
                </div>
            </div>

            <div class="platform-point flex ">
                <div class="illustration w-4/12">
                    <div class="illustration-container perspectives-iln">
                        <img src="/static/illustrations/perspectivesAsset.svg" alt="Storytelling is powerful">
                    </div>
                </div>
                <div class="text-content w-8/12">
                    <h3 class="h2">One topic, <br/>A spectrum of perspectives.</h3>
                    <p class="sub-text">Through periodically updated topics, you will get to learn about specific
                        issues, hear from role models, mentors and experts in their fields, giving you a 360<sup>o</sup>
                        view of the issues at hand.</p>
                </div>
            </div>
        </div>


        <div class="platform-point center text-center">
            <div class="container">
                <div class="max-w-4xl mx-auto">
                    <div class="illustration language-iln">
                        <img src="/static/illustrations/languageAsset.svg" alt="Storytelling is powerful">
                    </div>
                    <h3 class="h2">Speak your true language.</h3>
                    <p class="sub-text">Find your niche through creative expression! Strongest voices in history have
                        spoken through various forms of work. We urge you to jump onto the creators’ bandwagon and make
                        ripples, your way. </p>
                    <div class="media-list flex flex-wrap">
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/articlesAsset.svg" alt="">
                            </div>
                            <div class="title h3">Articles</div>
                        </div>
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/poetryAsset.svg" alt="">
                            </div>
                            <div class="title h3">Poetry</div>
                        </div>
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/artAsset.svg" alt="">
                            </div>
                            <div class="title h3">Art</div>
                        </div>
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/videosAsset.svg" alt="">
                            </div>
                            <div class="title h3">Videos</div>
                        </div>
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/podcastsAsset.svg" alt="">
                            </div>
                            <div class="title h3">Podcasts</div>
                        </div>
                        <div class="media-item w-1/3">
                            <div class="icon">
                                <img src="/static/illustrations/eventsAsset.svg" alt="">
                            </div>
                            <div class="title h3">Events</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="topic">
        <div class="container">
            <div class="next-topic-statement">
                <p class="sans-heading">Next Topic</p>
                <h2 class="h2 max-w-4xl">Choosing a career and creating space for the right opportunities.</h2>

                <div class="cta">
                    <p class="sub-text mb-0">We will take your submissions soon.</p>
                    <p class="h3 primary-color">Get Creating!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="book" class="text-center">
        <div class="container">
            <div class="sans-heading">Our First Book</div>
            <h2 class="h2">The Dot That Went For a Walk</h2>
            <p class="sub-text max-w-4xl mx-auto">With our first book, we attempted to Change the Narrative of women being damsels in
                distress. We bring to you stories of 51 Indian Power Women, who have been and continue to be beacons of
                hope for millions of children in the country. </p>
        </div>

            <div class="preview">
                <div class="slide">
                    <div class="text-content">
                        <h3 class="h3">05. Janaki Ammal</h3>
                        <p class="body-text">A woman who didn’t let obstacles like caste and gender come in the way of
                            being a botanist, Janaki Ammal showed not only India, but the world that for the sake of
                            ambition, one can overcome anything.</p>
                    </div>
                    <div class="image-container hidden md:block">
                        <img class="w-full" src="/static/preview_1_janaka_ammal.jpg" alt="">
                    </div>


                    <div class="stories-preview">
                        <div class="stories flex">
                            <div class="story-left"></div>
                            <div class="story-right"></div>
                        </div>
                        {{--<div class="link">Full Screen</div>--}}
                    </div>
                </div>
                <div class="hidden">
                    <div class="slide">
                        <div class="text-content">
                            <h3 class="h3">06. Kamaladevi Chattopadhyay</h3>
                            <p class="body-text">A visionary throughout her life, Kamaladevi Chattopadhyay wore many hats.
                                She was a freedom fighter, a women’s rights activist, a pioneer of arts and crafts in India
                                as well as a theatre enthusiast. She was never afraid of standing up for the causes she
                                believed in.</p>
                        </div>


                        <div class="stories-preview">
                            <div class="stories flex">
                                <div class="story-left"></div>
                                <div class="story-right"></div>
                            </div>
                            <div class="link">Full Screen</div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-content">
                            <h3 class="h3">29. Indra Nooyi</h3>
                            <p class="body-text">A global citizen who lives by the motto - ‘Be Yourself’ Indira Nooyi is the
                                first woman leader to head PepsiCo. Even in her childhood she was an aspiring leader, and
                                now she serves as the perfect role model and mentor for women aspiring to lead.</p>
                        </div>


                        <div class="stories-preview">
                            <div class="stories flex">
                                <div class="story-left"></div>
                                <div class="story-right"></div>
                            </div>
                            <div class="link">Full Screen</div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-content">
                            <h3 class="h3">35. Kalpana Chawla</h3>
                            <p class="body-text">Through her contribution to NASA and her journeys to space, Kalpana Chawla
                                became a household name across the globe. She broke barriers at every level, to achieve her
                                goals, and truly lives on as a citizen of the galaxy.</p>
                        </div>


                        <div class="stories-preview">
                            <div class="stories flex">
                                <div class="story-left"></div>
                                <div class="story-right"></div>
                            </div>
                            <div class="link">Full Screen</div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-content">
                            <h3 class="h3">47. Deepika Padukone</h3>
                            <p class="body-text">A name all too well known for her amazing performances on screen, Deepika
                                Padukone has a very strong, multi-talented personality. She is one of the most influential
                                people in India, to set out to change the mindset around mental health, by publicly speaking
                                about her experience with depression.</p>
                        </div>


                        <div class="stories-preview">
                            <div class="stories flex">
                                <div class="story-left"></div>
                                <div class="story-right"></div>
                            </div>
                            <div class="link">Full Screen</div>
                        </div>
                    </div>
                </div>

            </div>
        <div class="container">
            <div class="cta">

                <div class="mb-6"></div>
                <div class="top-buttons">
                    <a href="/" class="h3">Buy it</a>
                    <a href="/" class="h3">Gift it</a>
                </div>
                <div class="mb-6"></div>
                <p class="h3">For large reprint orders, <a href="/" class="h3">Click Here</a></p>

                <div class="mb-8"></div>
                <div class="availability">
                    <p class="sub-text font-bold">Available in <a href="/" class="std-link secondary-3">English</a>
                        <a href="/" class="std-link secondary-2">Telugu</a>
                        <a href="/" class="std-link secondary-1">Hindi</a></p>

                </div>
                <img src="/static/illustrations/janakiAsset.svg" alt="">
            </div>
        </div>

    </section>

    <section id="about-us">
        <div class="container">
            <h2 class="sans-heading text-center">About Us</h2>
            <p class="h1 text-center">Breaking Barriers!</p>

            {{--Video--}}

            <div class="point flex flex-row-reverse flex-wrap">
                <div class="img-container w-4/12">
                    <img src="/static/illustrations/teamAsset.svg" alt="team dot">
                </div>

                <div class="text-content w-8/12">
                    <h3 class="h3">Seeking Pioneers, Being Pioneers</h3>
                    <p class="sub-text">The Dot Express is the beloved brain child of founders - Sarada, Reema and
                        Lakshmi. While they bring their own individual flair to the table, it’s their combined effort
                        that makes the whole more than the sum of its parts. They strongly believe that their synergy is
                        what makes The Dot Express, the disruptive, transformative movement that it is!</p>
                </div>
            </div>

            <div class="point flex flex-wrap">
                <div class="img-container w-4/12">
                    <img src="/static/illustrations/changeAsset.svg" alt="the movement">
                </div>
                <div class="text-content w-8/12">
                    <h3 class="h3">The Dot Movement</h3>
                    <p class="sub-text">This movement wants every child to come up with their own answer to ‘What do you
                        want to be when you grow up?’ The Dot Movement believes that possibilities are limitless, and
                        that with the right intent and effort, every child in the world can pursue their own North
                        Star.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="stakeholders">

        <h2 class="hidden">Stakeholders</h2>
        <div class="item-list flex flex-wrap text-center">
            <div class="item w-1/3">
                <div class="icon">
                    <img src="/static/illustrations/academiaAsset.svg" alt="the movement">
                </div>
                <h3 class="serif-heading">Teachers & Academia</h3>
                <p class="body-text">I’m nobody’s taxi service; I’m not gonna be there to catch you every time you feel
                    like jumping out of a spaceship.</p>
            </div>
            <div class="item w-1/3">
                <div class="icon">
                    <img src="/static/illustrations/corporatesAsset.svg" alt="the movement">
                </div>
                <h3 class="serif-heading">Corporates & Foundations</h3>
                <p class="body-text">I’m nobody’s taxi service; I’m not gonna be there to catch you every time you feel
                    like jumping out of a spaceship.</p>
            </div>
            <div class="item w-1/3">
                <div class="icon">
                    <img src="/static/illustrations/expertsAsset.svg" alt="the movement">
                </div>
                <h3 class="serif-heading">Experts & Influencers</h3>
                <p class="body-text">I’m nobody’s taxi service; I’m not gonna be there to catch you every time you feel
                    like jumping out of a spaceship.</p>
            </div>
        </div>
    </section>

    <section id="goodbye">
        <div class="container text-center">


            <h2 class="hidden">What can you do on The Dot Express?</h2>
            <div class="logo">
                <div class="logo-container">
                    <img src="/static/tde_logo_color.png" class="mx-auto" alt="The Dot Express">
                </div>

                <div class="text-content">
                    <h3 class="h3"><span class="secondary-2 h3">Explore</span>  innovative ideas and opinions.</h3>
                    <h3 class="h3">Find your <span class="secondary-1 h3">Voice</span>  by voicing your opinions to the world.</h3>
                    <h3 class="h3"><span class="secondary-3 h3">Experience</span>  the world changing into a better place.</h3>
                </div>
                <div class="max-w-xl mx-auto py-12">
                    <img src="/static/illustrations/changeAsset.svg" alt="the movement">
                </div>

                <p class="h2 primary-color">See you soon!</p>
            </div>


        </div>
    </section>
</main>

<footer class="text-center">
    <div class="container">
        Copyright 2019, All Rights Reserved
    </div>

</footer>
</body>
</html>