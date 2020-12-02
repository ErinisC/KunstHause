<?php $title = ''; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<style>
    body {
        padding-top: 100px;
        margin-top: 100px;
    }

    canvas {
        vertical-align: top;
    }
</style>


<div class="container">


</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    var xoff1 = 0,
        xoff2 = 0,
        vertices1,
        vertices2;

    function setup() {
        createCanvas(windowWidth, windowHeight);
        noStroke();
        frameRate(40);
    }

    function draw() {
        translate(width / 2, height / 2);
        background(255, 60, 60);

        fill(255);
        vertices1 = [];
        for (i = 0; i < 8; i++) {
            var angle = 2 * PI * (i / 8);
            var r = map(noise(xoff1 + 100 * i), 0, 1, 100, 270);
            vertices1.push(r * cos(angle), -r * sin(angle));
            xoff1 += 0.0009;
        }
        amoeba(0, 0, 50, vertices1);

        fill("#ffef00");
        vertices2 = [];
        for (i = 0; i < 6; i++) {
            var angle = 2 * PI * (i / 6);
            var r = map(noise(xoff2 + 150 * i), 0, 1, 50, 100);
            vertices2.push(r * cos(angle), -r * sin(angle));
            xoff2 += 0.001;
        }
        amoeba(0, 0, 28, vertices2);
    }

    p5.prototype.amoeba = function(x, y, ctrl, vertices) {
        var segments = [];
        for (var i = 0; i < vertices.length; i += 2) {
            segments.push(new p5.Vector(vertices[i] - x, vertices[i + 1] - y));
        }
        segments.push(new p5.Vector(vertices[0] - x, vertices[1] - y));
        push();
        translate(x, y);
        beginShape();
        vertex(segments[0].x, segments[0].y);

        for (var i = 0; i < segments.length - 1; i++) {
            var firstAngle = segments[i].heading();
            var secondAngle = segments[i + 1].heading();

            bezierVertex(
                segments[i].x + ctrl * Math.sin(firstAngle),
                segments[i].y - ctrl * Math.cos(firstAngle),
                segments[i + 1].x - ctrl * Math.sin(secondAngle),
                segments[i + 1].y + ctrl * Math.cos(secondAngle),
                segments[i + 1].x,
                segments[i + 1].y
            );
        }

        endShape();
        pop();
    };
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>