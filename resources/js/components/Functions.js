import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class Function extends Component {
    constructor() {
        super();

        this.state = {

        };

        this.getTasks = this.getTasks.bind(this);
    }

    componentDidMout()  {
        this.getTasks();
    }

    getTasks() {
        return axios
            .get('/api/tasks/', {
                headers: { 'Content-Type' : 'application/json' }
            })
            .then(response => {
                console.log(response.data);
            });
    }

    render() {
        return (
            <div>
                hello <button className="btn" onClick={this.getTasks}>get tasks</button>
            </div>
        );
    };
}

export default Function;

if (document.getElementById('tasks')) {
    ReactDOM.render(<Function />, document.getElementById('tasks'));
}
