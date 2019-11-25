console.log('main.js running');

class List {
	constructor() {
		this.data = [];
	}

	add(data) {
		this.data.push(data);
		console.log('added: ', data);
	}

	show() {
		console.log(this.data);
	}
}

class todoList extends List {
	constructor() {
		super();
		this.user = 'eumesmo';
	}

	showUser() {
		console.log(this.user);
	}
}

const myTodo = new todoList();

document.getElementById('myTodoList').onclick = () => {
	myTodo.add('new todo item!!!');
	myTodo.show();
	myTodo.showUser();
	console.log(this);
};
