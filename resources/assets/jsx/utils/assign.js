const assign = Object.assign;

const assignToEmpty = (oldObject, newObject) => {
  return assign({}, oldObject, newObject);
};

export default assignToEmpty;
