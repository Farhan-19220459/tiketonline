let add_class_form = document.getElementById("add_class_form");

    add_class_form.addEventListener("submit", function (e) {
    e.preventDefault();
    add_class();
});

function add_class() {
  let data = new FormData();
  data.append("add_class", "");

  data.append("name", add_class_form.elements["name"].value);
  data.append("area", add_class_form.elements["area"].value);
  data.append("price", add_class_form.elements["price"].value);
  data.append("quantity", add_class_form.elements["quantity"].value);
  data.append("adult", add_class_form.elements["adult"].value);
  data.append("children", add_class_form.elements["children"].value);
  data.append("desc", add_class_form.elements["desc"].value);

  let features = [];

  add_class_form.elements["features"].forEach((el) => {
    if (el.checked) {
      features.push(el.value);
    }
  });

  let facilities = [];

  add_class_form.elements["facilities"].forEach((el) => {
    if (el.checked) {
      facilities.push(el.value);
    }
  });

  data.append("features", JSON.stringify(features));
  data.append("facilities", JSON.stringify(facilities));

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);

  xhr.onload = function () {
    var myModal = document.getElementById("add_class");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == 1) {
      alert("success", "New class added!");
      add_class_form.reset();
      get_all_class();
    } else {
      alert("error", "Server down!");
    }
  };

  xhr.send(data);
}

function get_all_class() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("class-data").innerHTML = this.responseText;
  };
  xhr.send("get_all_class");
}

let edit_class_form = document.getElementById("edit_class_form");

function edit_details(id) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    // console.log(JSON.parse(this.responseText));
    let data = JSON.parse(this.responseText);

    edit_class_form.elements["name"].value = data.classdata.name;
    edit_class_form.elements["area"].value = data.classdata.area;
    edit_class_form.elements["price"].value = data.classdata.price;
    edit_class_form.elements["quantity"].value = data.classdata.quantity;
    edit_class_form.elements["adult"].value = data.classdata.adult;
    edit_class_form.elements["children"].value = data.classdata.children;
    edit_class_form.elements["desc"].value = data.classdata.description;
    edit_class_form.elements["class_id"].value = data.classdata.id;

    edit_class_form.elements["features"].forEach((el) => {
      if (data.features.includes(Number(el.value))) {
        el.checked = true;
      }
    });

    edit_class_form.elements["facilities"].forEach((el) => {
      if (data.facilities.includes(Number(el.value))) {
        el.checked = true;
      }
    });
  };

  xhr.send("get_class=" + id);
}

edit_class_form.addEventListener("submit", function (e) {
  e.preventDefault();
  submit_edit_class();
});

function submit_edit_class() {
  let data = new FormData();

  data.append("edit_class", "");
  data.append("class_id", edit_class_form.elements["class_id"].value);

  data.append("name", edit_class_form.elements["name"].value);
  data.append("area", edit_class_form.elements["area"].value);
  data.append("price", edit_class_form.elements["price"].value);
  data.append("quantity", edit_class_form.elements["quantity"].value);
  data.append("adult", edit_class_form.elements["adult"].value);
  data.append("children", edit_class_form.elements["children"].value);
  data.append("desc", edit_class_form.elements["desc"].value);

  let features = [];

  edit_class_form.elements["features"].forEach((el) => {
    if (el.checked) {
      features.push(el.value);
    }
  });

  let facilities = [];

  edit_class_form.elements["facilities"].forEach((el) => {
    if (el.checked) {
      facilities.push(el.value);
    }
  });

  data.append("features", JSON.stringify(features));
  data.append("facilities", JSON.stringify(facilities));

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);

  xhr.onload = function () {
    var myModal = document.getElementById("edit_class");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == 1) {
      alert("success", "class data edited!");
      edit_class_form.reset();
      get_all_class();
    } else {
      alert("error", "Server down!");
    }
  };

  xhr.send(data);
}

function toggle_status(id, val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Status toggled!");
      get_all_class();
    } else {
      alert("success", "Server Down!");
    }
  };

  xhr.send("toggle_status=" + id + "&value=" + val);
}

let add_image_form = document.getElementById("add_image_form");

add_image_form.addEventListener("submit", function (e) {
  e.preventDefault();
  add_image();
});

function add_image() {
  let data = new FormData();
  data.append("image", add_image_form.elements["image"].files[0]);
  data.append("class_id", add_image_form.elements["class_id"].value);
  data.append("add_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);

  xhr.onload = function () {
    if (this.responseText == "inv_img") {
      alert(
        "error",
        "Only JPG, WEBP or PNG images are allowed!",
        "image-alert"
      );
    } else if (this.responseText == "inv_size") {
      alert("error", "Image should be less than 2MB!", "image-alert");
    } else if (this.responseText == "upd_failed") {
      alert("error", "Image upload failed. Server Down!", "image-alert");
    } else {
      alert("success", "New image added!", "image-alert");
      class_images(
        add_image_form.elements["class_id"].value,
        document.querySelector("#class-images .modal-title").innerText
      );
      add_image_form.reset();
    }
  };
  xhr.send(data);
}

function class_images(id, rname) {
  document.querySelector("#class-images .modal-title").innerText = rname;
  add_image_form.elements["class_id"].value = id;
  add_image_form.elements["image"].value = "";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("class-image-data").innerHTML = this.responseText;
  };

  xhr.send("get_class_images=" + id);
}

function rem_image(img_id, class_id) {
  let data = new FormData();
  data.append("image_id", img_id);
  data.append("class_id", class_id);
  data.append("rem_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Image Removed!", "image-alert");
      class_images(
        class_id,
        document.querySelector("#class-images .modal-title").innerText
      );
    } else {
      alert("error", "Image removal failed!", "image-alert");
    }
  };
  xhr.send(data);
}

function thumb_image(img_id, class_id) {
  let data = new FormData();
  data.append("image_id", img_id);
  data.append("class_id", class_id);
  data.append("thumb_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/class.php", true);

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Image Thumbnail Changed!", "image-alert");
      class_images(
        class_id,
        document.querySelector("#class-images .modal-title").innerText
      );
    } else {
      alert("error", "Thumbnail update failed!", "image-alert");
    }
  };
  xhr.send(data);
}

function remove_class(class_id) {
  if (confirm("Are you sure, you want to delete this class?")) {
    let data = new FormData();
    data.append("class_id", class_id);
    data.append("remove_class", "");

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/class.php", true);

    xhr.onload = function () {
      if (this.responseText == 1) {
        alert("success", "class Removed!");
        get_all_class();
      } else {
        alert("error", "class removal failed!");
      }
    };
    xhr.send(data);
  }
}

window.onload = function () {
  get_all_class();
};