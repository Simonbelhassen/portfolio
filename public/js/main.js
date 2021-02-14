function switchMenu() {
  if(document.getElementById('cross').style.display == "none") {
    document.getElementById('cross').style.display = "block";
    document.getElementById('hamburger').style.display = "none";
    document.getElementById('mainMenu').style.marginLeft = "0vw";
  }
  else {
      document.getElementById('cross').style.display = "none";
      document.getElementById('hamburger').style.display = "block";
      document.getElementById('mainMenu').style.marginLeft = "-100vw";
  }
}

function loader() {
  document.getElementById('gauche').style.opacity = ".5";
  document.getElementById('droite').style.opacity = ".5";
  document.getElementById('loader').style.display = "block";
  if(document.readyState == "complete") {
    document.getElementById('gauche').style.opacity = "1";
    document.getElementById('droite').style.opacity = "1";
    document.getElementById('loader').style.display = "none";
  }
}

function fullScreen() {
  if(document.getElementById('droite').style.position == "absolute") {
    document.getElementById('droite').style.position = "relative";
    document.getElementById('droite').style.left = "0%";
    if(document.getElementById('subHeader')) {
      document.getElementById('subHeader').style.flexDirection = "column";
      document.getElementById('presOptions').style.flexDirection = "column";
    }
    if(window.innerWidth > 800) {
      document.getElementById('fS').style.left = "40vw";
      document.getElementById('presOptions').style.flexDirection = "column";
    }
  }
  else {
    if(document.getElementById('subHeader')) {
      if(window.innerWidth > 800) {
        document.getElementById('subHeader').style.flexDirection = "row";
      } else {
        document.getElementById('subHeader').style.flexDirection = "column";
      }
    }
    document.getElementById('droite').style.position = "absolute";
    document.getElementById('droite').style.left = "100%";
    document.getElementById('fS').style.left = "";
    document.getElementById('presOptions').style.flexDirection = "row";
  }
}
