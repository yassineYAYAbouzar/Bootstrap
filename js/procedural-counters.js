function incrementCounter(counter) {
  if (counter.value < counter.max) {
    counter.value += 1;
    console.log(`Counter ${counter.name}'s value is now ${counter.value}`);
  } else {
    console.error(`Reached max (${counter.max}) - Can't increment ${counter.name}`);
  }
}
function canIncrementCounter(counter) {
  return counter.value < counter.max;
}
const counter1 = {
  name: 'Counter #1',
  value: 0,
  max: 5
};
while(canIncrementCounter(counter1)) {
  incrementCounter(counter1);
}
incrementCounter(counter1);