// ELEMENT
function elm(x) {
    var target = x.substring(1);
    var type = x.charAt(0);
    if (type == '#') {
        return document.getElementById(target);
    } else if (type == '.') {
        return document.getElementsByClassName(target);
    } else {
        return document.getElementsByTagName(x);
    }
}

// ACCOUNT CLICK
window.onclick = function () {
    elm(".accountLinks")[0].style.display = 'none';
};

// SUB MENU
if (elm(".has-submenu")) {
    for (var i = 0, len = elm(".has-submenu").length; i < len; i++) {
        elm(".has-submenu")[i].onclick = function (e) {
            e.stopPropagation();
            toggle(this.nextElementSibling);
        }
    }
}

// BTN SWITCH
if (elm(".checkAll") != undefined) {
    for (var i = 0, len = elm(".checkAll").length; i < len; i++) {
        var target = elm(".checkAll")[i].getAttribute("target");
        if (elm(target)[i] != undefined) {
            elm(".checkAll")[i].onchange = function () {
                var checked = this.checked;
                for (var i = 0, len = elm(target).length; i < len; i++) {
                    elm(target)[i].checked = checked;
                }
            }
        }
    }
}

// MENU ICON CLICK
if (elm(".menuIcon")) {
    elm(".menuIcon")[0].onclick = function () {
        elm(".container")[0].classList.toggle("is-click");
    };
}

// INPUT IMG
function getImg(x) {
    if (x.files.length > 0) {
        var fr = new FileReader();
        var imgSrc = null;
        var parent = x.parentElement;
        fr.onload = function (e) {
            imgSrc = e.target.result;
            if (parent.getElementsByTagName("img").length > 0) {
                parent.removeChild(parent.getElementsByTagName("img")[0]);
            }
            var img = document.createElement("img");
            img.setAttribute("src", imgSrc);
            img.style.width = "80px";
            img.style.verticalAlign = "top";
            parent.appendChild(img);
        }
        fr.readAsDataURL(x.files[0]);
    }
}

// NEW INPUT
for (var i = 0, len = elm(".btnNewInput").length; i < len; i++) {
    elm(".btnNewInput")[i].onclick = function () {
        findClosest(this, elm(".inputGroup")).nextElementSibling.classList.remove("hide");
    };
}

// SUB LIST
if (elm(".btnCaret")) {
    for (var i = 0, len = elm(".btnCaret").length; i < len; i++) {
        elm(".btnCaret")[i].onclick = function () {
            var row = findClosest(this, elm(".row"));
            row.classList.toggle("is-active");
        }
    }
}
if (elm(".caretAll")) {
    for (var i = 0, len = elm(".caretAll").length; i < len; i++) {
        elm(".caretAll")[i].onchange = function () {
            var stt = this.checked;
            var table = findClosest(this, elm(".table"));
            var row = findChildren(table, elm(".row"));
            for (var i = 0, len = row.length; i < len; i++) {
                if (stt) {
                    row[i].classList.add("is-active");
                } else {
                    row[i].classList.remove("is-active");
                }
            }
        }
    }
}

// SORT
if (elm(".titleSelect") != undefined) {
    for (var i = 0, len = elm(".titleSelect").length; i < len; i++) {
        elm(".titleSelect")[i].onclick = function (e) {
            e.stopPropagation();
            this.classList.toggle("is-active");
        }
    }
}
window.onclick = function () {
    for (var i = 0, len = elm(".titleSelect").length; i < len; i++) {
        elm(".titleSelect")[i].classList.remove("is-active");
    }
}


// FILTER
if (elm('.btnFilter') != undefined) {
    for (var i = 0, len = elm('.btnFilter').length; i < len; i++) {
        elm('.btnFilter')[i].onclick = function () {
            elm('.boxFilter')[0].classList.toggle('is-active');
        }
    }
}

// PRICE BAR
var slider = document.getElementById('filterPrice');
var rangeValue = document.getElementsByClassName('rangeValue');

noUiSlider.create(slider, {
    start: [0, 100],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});

slider.noUiSlider.on('update', function (values) {
    for (var i = 0, len = values.length; i < len; i++) {
        rangeValue[i].setAttribute('value', values[i]);
    }
    values = values.map(function (x) {
        return parseInt(x);
    });
});

for (var i = 0, len = rangeValue.length; i < len; i++) {
    rangeValue[i].addEventListener('change', function () {
        var v = [];
        for (var i = 0, len = rangeValue.length; i < len; i++) {
            v[i] = rangeValue[i].value;
        }
        slider.noUiSlider.set(v);

        console.log(v);
    });
}

var noUihandle = elm('.noUi-handle');
if (noUihandle != undefined) {
    for (var i = 0, len = noUihandle.length; i < len; i++) {
        noUihandle[i].addEventListener('click', function () {
            var v = slider.noUiSlider.get();
            // AJAX HERE
            console.log(v);
        });
    }
}

//FIND PARENT
function findClosest(x, parent) {
    do {
        if (parent.length > 0) {
            for (var i = 0, len = parent.length; i < len; i++) {
                if (x.isSameNode(parent[i])) {
                    return x;
                }
            }
        } else {
            if (x.isSameNode(parent)) {
                return x;
            }
        }
    } while (x = x.parentElement);
}

// FIND CHILDREN
function findChildren(x, y) {
    var arr = [];
    if (y.length > 0) {
        for (var i = 0, len = y.length; i < len; i++) {
            if (x.isSameNode(findClosest(y[i], x))) {
                arr.push(y[i]);
            }
        }
    } else {
        if (x.isSameNode(findClosest(y, x))) {
            arr.push(y);
        }
    }
    return arr;
}

//RENDER HTML
function renderHTML(x, content) {
    var tag = document.createElement(x);
    tag.append(content);
    return tag;
}

//TOGGLE
function toggle(x) {
    var css = window.getComputedStyle(x, null);
    if (css.getPropertyValue("display") == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}


//SLIDE	
function slideToggle(el) {
    var elCss = window.getComputedStyle(el, null);
    if (elCss.getPropertyValue("height") == 0 + 'px') {
        el.style.height = el.scrollHeight + "px";
    } else {
        el.style.height = 0;
    }
}

function extend(o1, o2) {
    if (o1 instanceof Array) {
        var result = [];
        // RESULT = O1
        for (var i = 0, len = o1.length; i < len; i++) {
            result.push(o1[i]);
        }
        // RESULT = O2
        for (var i = 0, len = o2.length; i < len; i++) {
            if (result.indexOf(o2[i]) < 0) {
                result.push(o2[i]);
            }
        }
    } else if (typeof o1 == 'object') {
        var result = {};
        var o1Keys = Object.keys(o1);
        for (var i = 0, len = o1Keys.length; i < len; i++) {
            result[o1Keys[i]] = o1[o1Keys[i]];
        }
        var o2Keys = Object.keys(o2);
        for (var i = 0, len = o2Keys.length; i < len; i++) {
            result[o2Keys[i]] = o2[o2Keys[i]];
        }
    }
    return result;
}
function extend2(o1, o = []) {
    var result = o1;
    for (var i = 0, len = o.length; i < len; i++) {
        var result = extend(result, o[i]);
    }
    return result;
}

//Phân trang
function Pager(tableName, itemsPerPage) {
    this.tableName = tableName;
    this.itemsPerPage = itemsPerPage;
    this.currentPage = 1;
    this.pages = 0;
    this.inited = false;

    this.showRecords = function (from, to) {
        var rows = document.getElementById(tableName).rows;
        // i starts from 1 to skip table header row
        for (var i = 1; i < rows.length; i++) {
            if (i < from || i > to)
                rows[i].style.display = 'none';
            else
                rows[i].style.display = '';
        }
    }

    this.showPage = function (pageNumber) {
        if (!this.inited) {
            alert("not inited");
            return;
        }

        var oldPageAnchor = document.getElementById('pg' + this.currentPage);
        oldPageAnchor.className = 'pg-normal';

        this.currentPage = pageNumber;
        var newPageAnchor = document.getElementById('pg' + this.currentPage);
        newPageAnchor.className = 'pg-selected';

        var from = (pageNumber - 1) * itemsPerPage + 1;
        var to = from + itemsPerPage - 1;
        this.showRecords(from, to);
    }

    this.prev = function () {
        if (this.currentPage > 1)
            this.showPage(this.currentPage - 1);
    }

    this.next = function () {
        if (this.currentPage < this.pages) {
            this.showPage(this.currentPage + 1);
        }
    }

    this.init = function () {
        var rows = document.getElementById(tableName).rows;
        var records = (rows.length - 1);
        this.pages = Math.ceil(records / itemsPerPage);
        this.inited = true;
    }

    this.showPageNav = function (pagerName, positionId) {
        if (!this.inited) {
            alert("not inited");
            return;
        }
        var element = document.getElementById(positionId);

        var pagerHtml = '<span onclick="' + pagerName + '.prev();" class="pg-normal"> &#171 Prev </span>';
        for (var page = 1; page <= this.pages; page++)
            pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName + '.showPage(' + page + ');">' + page + '</span> ';
        pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal"> Next &#187;</span>';

        element.innerHTML = pagerHtml;
    }
}
function preview(){
    const input = document.getElementById('file-input');
  const image = document.getElementById('img-preview');

  input.addEventListener('change', (e) => {
    if (e.target.files.length) {
      const src = URL.createObjectURL(e.target.files[0]);
      image.src = src;
    }
  });
  }


      





