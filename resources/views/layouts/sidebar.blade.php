<div class="sidebar" data-color="red">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <center>
            <img class="img-responsive" src="{{ URL('assets/img/icon.png') }}" alt="Aplikasi Online" style="height: 100px;" /></center>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="{{ URL('/') }}">
                    <i class="pe-7s-home"></i>
                    <p>HOME</p>
                </a>
            </li>
            <li>
                <a href="{{ URL('tweet/unduh') }}">
                    <i class="pe-7s-download"></i>
                    <p>START CRAWLING</p>
                </a>
            </li>
            <li>
                <a href="{{ URL('tweet') }}">
                    <i class="pe-7s-chat"></i>
                    <p>RESULT LIST</p>
                </a>
            </li>
            <li>
                <a href="{{ URL('preprocessing') }}">
                    <i class="pe-7s-note"></i>
                    <p>PREPROCESSING</p>
                </a>
            </li>
            <li>
                <a href="{{ URL('tweet/preprocessing') }}">
                    <i class="pe-7s-copy-file"></i>
                    <small>PREPROCESSING LIST</small>
                </a>
            </li>
            <li>
                <a href="{{ URL('klasifikasi') }}">
                    <i class="pe-7s-graph3"></i>
                    <p>ANALYSIS</p>
                </a>
            </li>
            
            <li>
                <a href="{{ URL('training') }}">
                    <i class="pe-7s-note2"></i>
                    <p>TWEET TRAINING</p>
                </a>
            </li>
            <li>
                <a href="{{ URL('training/add') }}">
                    <i class="pe-7s-eyedropper"></i>
                    <small>ADD TWEET TRAINING</small>
                </a>
            </li>
            <!--
            <li>
                <a href="{{ URL('tentang-aplikasi') }}">
                    <i class="pe-7s-info"></i>
                    <small>About</small>
                </a>
            </li>
            <li>
                <a href="table.html">
                    <i class="pe-7s-note2"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>