class Counter {
  constructor(name, max) {
    this.value = 0;
    this.max = max;
    this.name = name;
  }
  canIncrement() {
    return this.value < this.max;
  }
  increment() {
    if (this.value < this.max) {
      this.value += 1;
      console.log(`Counter ${this.name}'s value is now ${this.value}`);
    } else {
      console.error(`Reached max (${this.max}) - Can't increment ${this.name}`);
    }
  }
}
counter1 = new Counter('Counter #1', 5);
// while(counter1.canIncrement()) {
//   counter1.increment();
// }
// counter1.increment();
console.log(counter1  instanceof Counter);