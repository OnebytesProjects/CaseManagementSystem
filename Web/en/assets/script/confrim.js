function cnfrmselection() {
    let text = "Are You Sure?";
    if (confirm(text) == true) {
      text = "You pressed OK!";
    } else {
      text = "You canceled!";
    }
    document.getElementById("demo").innerHTML = text;
  }