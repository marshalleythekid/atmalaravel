@extends('layouts.app')
@section('title')
Home
@endsection

@section('content')

<div class="rbt-utilize-area rainbow-section-gap-big">
    <div class="container">
        <div class="utilize-inner">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="rbt-default-sidebar sticky-top rbt-shadow-box">
                        <div class="inner">
                            <div class="content-item-content">
                                <div class="rbt-default-sidebar-wrapper">
                                    <nav class="mainmenu-nav">
                                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                            <li class="has-submenu"><a class="collapse-btn" data-bs-toggle="collapse" href="#getstarted" role="button" aria-expanded="true" aria-controls="getstarted"><span>Getting started</span></a>
                                                <div class="show" id="getstarted">
                                                    <ul class="submenu rbt-default-sidebar-list">
                                                        <li>
                                                            <a href="#text-generator-sec">
                                                                <span>Connect with AI text generator</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#pernalized-sec"><span>Get Personalized advices</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#engage-sec">
                                                                <span>Explore and engage</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-submenu"><a class="collapse-btn collapsed" data-bs-toggle="collapse" href="#pricing" role="button" aria-expanded="false" aria-controls="pricing"><span>Pricing Plans</span></a>
                                                <div class="collapse" id="pricing">
                                                    <ul class="submenu rbt-default-sidebar-list">
                                                        <li>
                                                            <a href="#example1">
                                                                <span>Connect with AI text generator</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#example2"><span>Get Personalized advices</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#example3">
                                                                <span>Get Personalized advices</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-submenu"><a class="collapse-btn collapsed" data-bs-toggle="collapse" href="#corefeature" role="button" aria-expanded="false" aria-controls="corefeature"><span>Core Feature's</span></a>
                                                <div class="collapse" id="corefeature">
                                                    <ul class="submenu rbt-default-sidebar-list">
                                                        <li>
                                                            <a href="#">
                                                                <span>Connect with AI text generator</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>Get Personalized advices</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Get Personalized advices</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#"><span>Roadmap</span></a></li>
                                            <li><a href="#"><span>Enhanced Features</span></a></li>
                                            <li><a href="#"><span>Help and support</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 inner-content pl--0">

                    <div id="getstarted_two" class="single-inner-box">
                        <h3 class="section-title">Getting started</h3>
                        <div id="text-generator-sec" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-01.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels-Themes </p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="pernalized-sec" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-02.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels</p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="engage-sec" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-03.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels </p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="pricing_two" class="single-inner-box">
                        <h3 class="section-title">Getting started</h3>
                        <div id="example1" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-01.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels </p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="example2" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-02.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels </p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="example3" class="rbt-elements-area rbt-shadow-box">
                            <div class="wrapper">
                                <h4 class="title-sm">Connect with AI text generator</h4>
                                <div class="desc">
                                    <div class="image">
                                        <img src="/static/images/utilize-img/ut-image-03.png" alt="">
                                    </div>
                                    <p class="b1">All you have to do to register for an account on Pixcels - AI chat app is provide your name, email address, and password. You can begin examining the app's features as soon as you've registered. Chatting with friends, family, and even new acquaintances is made simple with the Pixcels </p>
                                    <h6>Deep Learning and Transformers</h6>
                                    <ul class="content-list">
                                        <li>Around 2013, the use of deep learning, especially transformer architectures, revolutionized NLP.</li>
                                        <li>Transformer models, like OpenAI's GPT (Generative Pre-trained Transformer) series, became</li>
                                        <li>AI text generators, including GPT-3, have found applications in chatbots, content creation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection