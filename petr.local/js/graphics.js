function DrawOrderCanvars(id) {
    /* 
        width rect 125px
        size box 331,336
        1 circle[x:71, y:9]
        2 circle[x:227,y:7]
        2 circle[x:304,y:92]

    */
    var canvas = document.getElementById(id);
    var graphics = canvas.getContext("2d");
    //
    //  Data graphics
    //
    var canvasW = canvas.width;
    var canvasH = canvas.height;
    var centerCircleX = canvasW / 2;
    var centerCircleY = canvasH / 2;
    var radiusCircle = canvasW /


        //var radiusCircle = 12.5;
        graphics.lineWidth = 1;
    graphics.strokeStyle = 'red';
    graphics.fillStyle = 'red';
    //
    //  Drawing
    //
    var pi = Math.PI
    graphics.beginPath();
    graphics.arc((2 * pi) / 3, (2 * pi) / 3, radiusCircle, 0, 2 * Math.PI);
    //graphics.arc(71, radiusCircle + 9, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();
    graphics.fill();
    /*
    graphics.beginPath();
    graphics.arc(227, radiusCircle + 7, radiusCircle, 0, 2 * Math.PI, false);
    graphics.stroke();
    graphics.fill();
    graphics.beginPath();
    graphics.arc(304, radiusCircle + 92, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();
    graphics.fill();
    graphics.beginPath();
    graphics.arc(315, radiusCircle + 208, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();
    graphics.fill();
    graphics.beginPath();
    graphics.arc(canvas.width - 47, radiusCircle + canvas.height - 30, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();
    graphics.fill();
    /*
    graphics.beginPath();
    graphics.arc(71, radiusCircle + 9, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();
    graphics.beginPath();
    graphics.arc(227, radiusCircle + 7, radiusCircle, 0, 2 * Math.PI, false);
    graphics.stroke();
    graphics.fill();
    graphics.beginPath();
    graphics.fill();
    graphics.arc(304, radiusCircle + 92, radiusCircle, 0, 2 * Math.PI);
    graphics.stroke();*/
    /*
    graphics.beginPath();
    graphics.arc(71, radiusCircle + 9, radiusCircle, 0, 2 * Math.PI, false);
    graphics.fill();
    graphics.arc(227, radiusCircle + 7, radiusCircle, 0, 2 * Math.PI, false);
    graphics.fill();
    graphics.arc(304, radiusCircle + 92, radiusCircle, 0, 2 * Math.PI, false);
    graphics.fill();*/
}

function DrawFillCircle(gr, x, y, radius, startAngle, endAngle) {
    var gr = new Path2D();
    gr.arc(x, y, radius, startAngle, endAngle);
    return gr;
}