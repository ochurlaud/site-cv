</div>

<?php
    $git_date = `git log -n 1 --format=%ct`;
    $hash = `git log -n 1 --format=%h`;
    $descript = `git log -n 1 --format=%s`;
    $date = strftime('%d %b %Y', intval($git_date));
?>
    <div id="footer">
        <div class="container center-block">
            Olivier CHURLAUD &ndash; <?php echo $date; ?>
            <span style="color:#555;   font-style:italic;"> (<?php echo $hash .': ' . $descript . ')';?></span>
        </div>
    </div>

    <script>
        var page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1)
        var page = page.split('.');
        nom_page = page[0];
        if($('li.'+nom_page).length) {
            $('li.'+nom_page).addClass('active');
        }
    </script>

    </body>
</html>

