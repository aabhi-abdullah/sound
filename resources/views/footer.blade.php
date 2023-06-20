<footer id="footer">
    <div class="footer-last">
        <div class="row clearfix">
            <span class="copyright">© 2023 by <a href="#">Sound</a>. All Rights Reserved.</span>
            <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
            <div class="foot-menu">
                <ul>
                    <li><a href="{{url('index')}}">Home</a></li>
                    <li><a href="{{url('musics')}}">Musics</a></li>
                    <li><a href="{{url('videos')}}">Videos</a></li>
                    <li><a href="{{url('categories')}}">Categories</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                </ul><!-- end links -->
            </div><!-- end foot menu -->
        </div><!-- row -->
    </div><!-- end last -->
</footer><!-- end footer -->

</div><!-- end layout -->
<!-- Scripts -->
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/codevz.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>	
<script type="text/javascript" src="{{asset('sound')}}/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.jplayer.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/ttw-music-player-min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/music/myplaylist.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/countdown.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{{asset('sound')}}/js/custom.js"></script>
<script type="text/javascript">	
/* <![CDATA[ */
jQuery(document).ready(function() {

    jQuery('.tp-banner').revolution({
        delay:9000,
        startwidth:1060,
        startheight:610,
        hideThumbs:10,
        navigationType:"off",
        fullWidth:"on",
        forceFullWidth:"on"
    });

    jQuery("#event1").countdown({
        date: "31 December 2023 23:59:59",
        format: "on"
    },
    function() {
        // callback function
    });

});
/* ]]> */
</script>
{{-- <script>
$(document).ready(function() {
    $("#search-input").on("keyup", function() {
        var searchQuery = $(this).val().toLowerCase();
        var mainContent = $("#main-content");
        var searchHeading = $("#search-heading");
        var searchResults = $("#search-results");
        
        searchResults.empty();
        
        if (searchQuery.length > 0) {
            $.ajax({
                url: "/search",
                method: "GET",
                data: { query: searchQuery },
                success: function(response) {
                    if (response.length > 0) {
                        searchHeading.show();
                        searchResults.show();
                        mainContent.hide();
                        
                        $.each(response, function(index, result) {
                            searchResults.append(`
                                <li class="grid_4">
                                    <a class="m-thumbnail"><img width="50" height="50" src="{{asset('storage')}}/${result.image}" alt="#"></a>
                                    <h3><a href="{{'playmusic/'}}${result.id}">${result.title}</a></h3>
                                    <span>${result.artist}</span>
                                    <span>${result.releasedate}</span>
                                </li>
                            `);
                        });
                    } else {
                        searchHeading.text("No Results Found");
                        searchHeading.show();
                        searchResults.hide();
                        mainContent.hide();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        } else {
            searchHeading.hide();
            searchResults.hide();
            mainContent.show();
        }
    });
});


</script> --}}
<script>
$(document).ready(function() {
    $("#search").keyup(function() {
        var value = $(this).val().toLowerCase();
        var noResults = true; // Flag to track if there are no results
        
        $(".mysrch").filter(function() {
            var matched = $(this).text().toLowerCase().indexOf(value) > -1;
            $(this).toggle(matched);
            
            if (matched) {
                noResults = false; // At least one match found
            }
        });
        
        // Show "No Results Found" message if there are no matches
        if (noResults) {
            $("#no-results").show();
        } else {
            $("#no-results").hide();
        }
    });
});


</script>

</body>
</html>