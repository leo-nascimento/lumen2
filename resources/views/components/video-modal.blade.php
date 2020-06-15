<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Entendendo o sistema</h5>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close" onclick="pauseVideo()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <video id="lumen-video" class="h-100 w-100" controls poster="https://scontent.fgyn7-1.fna.fbcdn.net/v/t1.0-9/s960x960/103326498_2921281104765851_2138250799319657030_o.jpg?_nc_cat=108&_nc_sid=730e14&_nc_eui2=AeGGq_YdXiqyxOIy2B9pbNXiRa6veLmue_9Frq94ua57_xLHnU9Rq28iXe2_eXLnFyE3smlz5sVERzaBU1Gr2HYd&_nc_ohc=I30e3RZb_XgAX8NGIVY&_nc_ht=scontent.fgyn7-1.fna&_nc_tp=7&oh=c1e24d4a7081d8a92c8fab99d8ddb92d&oe=5F0B04CD">
                    <source src="{{asset('video/video.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<script>
    var video = document.getElementById("lumen-video");
    function pauseVideo() {
        video.pause();
    }
</script>

