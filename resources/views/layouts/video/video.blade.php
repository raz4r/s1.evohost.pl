<head>
    <link href="https://vjs.zencdn.net/7.2.4/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <script src="https://linkvertise.net/cdn/linkvertise.js"></script><script>linkvertise(12362);</script>
</head>

<body>
<video id="my-video" class="video-js vjs-default-skin vjs-16-9 vjs-big-play-centered" controls preload="auto" width="auto"
       poster="MY_VIDEO_POSTER.jpg" data-setup=''>
    <source src="{{$pass->url()}}" type='video/mp4'>
    <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
</video>

<script src="https://vjs.zencdn.net/7.2.4/video.js"></script>
</body>
