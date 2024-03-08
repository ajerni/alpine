function myComponent(startName = "") {
  return {
    name: startName,

    hello(name = "") {
      alert("Hello " + name + "!");
    },

    sayMyName() {
      alert("Are you " + this.name + "?");
      this.name = "";
    },
  };
}
