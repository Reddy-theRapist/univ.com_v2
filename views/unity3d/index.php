<div class="row extendedContainer" id="theContainer">
    <div class="col-sm-3">
        <h4 style="text-align:center">Навигация</h4>
        <!-- <nav class="col-sm-3"> -->
        <ul class="nav nav-pills nav-stacked extendedUL">
            <li><button class="btn btn-primary extendedBtn-bottom" onclick="scrollTowards('start')">В начало</button></li>
            <li><button class="btn btn-primary extendedBtn-top" onclick="scrollTowards('end')">В конец</button></li>
        </ul>
        <!-- </nav> -->
        <br>
        <div class="input-group extendedUL">
            <input type="text" class="form-control" placeholder="Поиск по сайту..">
            <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
			</button>
			</span>
        </div>
    </div>

    <div class="col-sm-9">
        <div class="webgl-content">
            <div id="gameContainer">

            </div>
<!--        <div id="gameContainer" style="width: 960px; height: 600px"></div>-->
            <div class="footer">
                <div class="webgl-logo"></div>
                <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
                <div class="title">Roll-a-ball-complete</div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
//    var gameInstance = UnityLoader.instantiate("gameContainer", "Build/v1.0.json", {onProgress: UnityProgress});
    $("#unity > a").css("color","rgb(252, 163, 90)");
</script>