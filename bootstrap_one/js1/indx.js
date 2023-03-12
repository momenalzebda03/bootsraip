var tag_header = document.querySelectorAll(".nav-link");
for (let i = 0; i < tag_header.length; i++) {
    var chekd = tag_header[i];
    chekd.addEventListener("click", function () {
        for (let i = 0; i < tag_header.length; i++) {
            tag_header[i].classList.remove("actve");
        }
        this.classList.add("actve");
    });
}

var button_image = document.querySelectorAll(".button");
for (let i = 0; i < button_image.length; i++) {
    var chekd = button_image[i];
    chekd.addEventListener("click", function () {
        for (let i = 0; i < button_image.length; i++) {
            button_image[i].classList.remove("all");
        }
        this.classList.add("all");
        var image = document.querySelectorAll(".div_images img");
        image.forEach(element => {
            element.style.opacity = "1";
        });
    });
}

var click2 = document.getElementById("button2");
click2.addEventListener("click", function () {
    var image = document.querySelectorAll(".div_images img");
    for (let i = 0; i <= 5; i++) {
        image[i].style.opacity = "0.5";
    }
    image.style.opacity = "1";
});

var click3 = document.getElementById("button3");
click3.addEventListener("click", function () {
    var image = document.querySelectorAll(".div_images img");
    for (let i = 0; i <= 3; i++) {
        image[i].style.opacity = "0.5";
    }
    image.style.opacity = "1";
});

var click4 = document.getElementById("button4");
click4.addEventListener("click", function () {
    var image = document.querySelectorAll(".div_images img");
    for (let i = 0; i <= 1; i++) {
        image[i].style.opacity = "0.5";
    }
    image.style.opacity = "1";
});

var click5 = document.getElementById("button5");
click5.addEventListener("click", function () {
    var image = document.querySelectorAll(".div_images img");
    for (let i = 0; i <= 0; i++) {
        image[i].style.opacity = "0.5";
    }
    image.style.opacity = "1";
});