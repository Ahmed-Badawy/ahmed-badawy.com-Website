
@section('share')
<h3 class='bright bright-background'>Share With The World</h3>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550dac8526dbdb66" async="async"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
@stop






@section('follow')
<h3 class='bright bright-background'>Follow Me</h3>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550dac8526dbdb66" async="async"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_horizontal_follow_toolbox"></div>
@stop 







@section('comments')
<h3 class='bright bright-background'>User Comments</h3>
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ahmed-badawy';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the</noscript>
@stop




