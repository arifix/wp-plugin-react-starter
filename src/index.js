import App from "./components/App";

document.addEventListener("DOMContentLoaded", function () {
  var element = document.getElementById("wrps-app");
  if (typeof element !== "undefined" && element !== null) {
    ReactDOM.render(<App />, document.getElementById("wrps-app"));
  }
});
