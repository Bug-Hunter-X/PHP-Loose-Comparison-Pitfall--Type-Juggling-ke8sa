function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

function bar(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}
//Always use strict comparison (===) to avoid unexpected results from type juggling.