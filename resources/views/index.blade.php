@extends('layouts.boilerplate')

@section('content')
<div class="main-container d-flex flex-column justify-content-between">
    <nav class="navigation d-flex justify-content-between align-items-center">
        <img class="nav-logo" src="assets/kch-logo.png" alt="Knowledge Channel Logo">
        <span class="nav-web"><a href="https://www.knowledgechannel.org/" target="_blank"><span class="nav-web-link">www.knowledgechannel.org</span> <i class="fas fa-globe"></i></a></span>
    </nav>
    <main>
        <div class="top">
            <h1 class="main-header">Inspiring healthy and happy KCh members!</h1>
            <p class="">Let us transform the learning experiences through media
                and technology in the service of the Filipino children!</p>
        </div>
        <div class="links">
            <div class="row">
                <div class="col-sm-3">
                    <div class="link-container">
                        <h1 class="link-header">For KC Employees</h1>
                        <p>Supervise current knowledge channel
                            interns, give task & grade their task,
                            encourage a happy & healthy intern!</p>
                        <a href="/employee" class="button button-main d-flex justify-content-between">
                            <span>Login as Employee</span>
                            <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="link-container">
                        <h1 class="link-header">For KC Interns</h1>
                        <p>Utilize the tools given in the application in
                            order to organize and achieve a better
                            and happy environment!</p>
                        <a href="/login" class="button button-main d-flex justify-content-between">
                            <span>Login as Intern</span>
                            <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="d-flex justify-content-between">
        <div>
            <p class="footer-p">Copyright © 2020  |  Knowledge Channel Foundation Inc.</p>
            <p class="footer-p">Privacy Policy</p>
        </div>
        <div>
            <a class="links" href="https://www.facebook.com/knowledgechannel/" target= "_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="links" href="https://twitter.com/kchonline?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target= "_blank"><i class="fab fa-twitter-square"></i></a>
            <a class="links" href="https://www.youtube.com/user/knowledgechannelorg" target= "_blank"><i class="fab fa-youtube-square"></i></a>
            <a class="links" href="https://www.instagram.com/knowledge_channel/?hl=en" target= "_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</div>
@endsection
