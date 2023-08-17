import { Gradient } from './gradient.js'
for (let element of document.querySelectorAll(["[gradient]"])) {
    element.style = "overflow: hidden; "
    var canvas = document.createElement("canvas");
    canvas.setAttribute("gradient-canvas", "");
    element.prepend(canvas)
    let gradient = new Gradient()
    gradient.initGradientT(canvas)
}