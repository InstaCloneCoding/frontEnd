<section class="fid">
    <div id="loading"></div>
    <div>
        <p>게시글</p>
        <?php if( !empty($feed) ) { ?>
            <?php foreach($feed as $key => $value) { ?>
                <p> <?= $value->userId ?> </p>
                <p> <?= $value->fidContent ?> </p>
            <?php } ?>
        <?php } else { ?>
        <?php } ?>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"> </script>
<script type="text/javascript" src="/script/loading.js"> </script>
<script type="text/javascript" src="/script/fid.js"> </script>