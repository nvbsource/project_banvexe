function state(){
    console.log(this.name);
}

var name = "123123";

var object = {
    name: "bao",
    state: () => state()
}

state();
object.state();