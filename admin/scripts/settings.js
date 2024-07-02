let general_data, contacts_data;
let general_s_form = document.getElementById("general_s_form");
let contacts_s_form = document.getElementById("contacts_s_form");

function get_general() {
  let title_inp = document.getElementById("title_inp");
  let about_inp = document.getElementById("about_inp");
  let title = document.getElementById("title");
  let about = document.getElementById("about");

  let shutdown_toggle = document.getElementById("shutdown-toggle");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    general_data = JSON.parse(this.responseText);
    title.innerText = general_data.title;
    about.innerText = general_data.about;
    title_inp.value = general_data.title;
    about_inp.innerText = general_data.about;
    if (general_data.Shutdown == 0) {
      shutdown_toggle.checked = false;
      shutdown_toggle.value = 0;
    } else {
      shutdown_toggle.checked = true;
      shutdown_toggle.value = 1;
    }
  };

  xhr.send("get_general");
}

general_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  upd_general(title_inp.value, about_inp.value);
});

function upd_general(title_val, about_val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    var myModal = document.getElementById("general-s");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == 1) {
      alert("success", "Changes Saved!");
      get_general();
    } else {
      alert("error", "Theres no changes made!");
    }
  };

  xhr.send("title=" + title_val + "&about=" + about_val + "&upd_general");
}

function upd_shutdown(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (general_data.Shutdown == 0) {
      alert("success", "Website berhasil dinonaktifkan!");
      get_general();
    } else {
      alert("success", "Website kembali Aktif!");
      get_general();
    }
  };
  xhr.send("upd_shutdown=" + val);
}

function get_contacts() {
  let contacts_p_id = [
    "address",
    "gmaps",
    "telp1",
    "telp2",
    "email",
    "facebook",
    "instagram",
    "twitter",
  ];
  let iframe = document.getElementById("iframe");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    contacts_data = JSON.parse(this.responseText);
    console.log(contacts_data);
    contacts_data = Object.values(contacts.data);

    console.log(contacts_data);

    for (i = 0; i < contacts_p_id.length; i++) {
      document.getElementById(contacts_p_id[i]).innerText =
        contacts_data[i + 1];
    }
    iframe.src = contacts_data[9];
    contacts_inp(contacts_data);
  };

  xhr.send("get_general");
}

// function contacts_inp(contacts_data) {
//   let contacts_inp_id = [
//     "address",
//     "gmaps",
//     "telp1",
//     "telp2",
//     "email",
//     "facebook",
//     "instagram",
//     "twitter",
//   ];

//   for (i = 0; i < contacts_inp_id.length; i++) {
//     document.getElementById(contacts_inp_id[i]).value = data[i + 1];
//   }
// }

contacts_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  upd_contacts();
});

function upd_contacts() {
  let index = [
    "address",
    "gmaps",
    "telp1",
    "telp2",
    "email",
    "facebook",
    "instagram",
    "twitter",
  ];
  let contacts_inp_id = [
    "address_inp",
    "gmaps_inp",
    "telp1_inp",
    "telp2_inp",
    "email_inp",
    "facebook_inp",
    "instagram_inp",
    "twitter_inp",
  ];

  let data_str = "";

  for (i = 0; i < index.length; i++) {
    data_str +=
      index[1] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
  }
  data_str += "upd_contacts";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    var myModal = document.getElementById("contacts-s");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();
    if (this.responseText == 1) {
      alert("success", "Changes Saved!");
      get_contacts();
    } else {
      alert("error", "Theres no changes made!");
    }
  };

  xhr.send(data_str);
}

window.onload = function () {
  get_general();
  get_contacts();
};
