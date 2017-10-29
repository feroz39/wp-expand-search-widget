<h1>wp-expand-search-widget</h2>

<h4>This is very simple and easy to use expandable search box widget.</h4>

<h2>Instructions</h2>

1. Create a folder call 'widget' in your theme.
2. Put the <code>expand_search.php</code> file in the 'widget' that have you created.
3. On <code>functions.php</code> add this line of code <code>include_once('widgets/expend_search.php');</code>
4. Put the <code>js</code> and <code>css</code> file in apropriate folder and enque in your <code>functions.php</code>.
5. Add this to your <code>script.js</code> or in your <code>footer.php</code>
<br/>
    <code>
        var x = document.querySelectorAll( '.sb-search' );
        new UISearch( document.getElementById( 'sb-search' ) );
    </code>
