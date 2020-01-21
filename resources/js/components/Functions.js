import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class Function extends Component {
    constructor() {
        super();

        this.state = {
            tasks: []
        };

        this.getTasks = this.getTasks.bind(this);
    }

    // componentDidMout()  {
    //     this.getTasks();
    // }

    getTasks() {
        return axios
            .get('/api/tasks/', {
                headers: { 'Content-Type' : 'application/json' }
            })
            .then(response => {
                const tasks = response.data;
                this.setState({ tasks });
                console.log(this.state.tasks);
            });
    }

    addTasks(task_name, task_desc, task_tag, due) {
        return axios
            .post('/api/tasks/', 
            {
                task_name: task_name,
                task_desc: task_desc,
                task_tag: task_tag,
                due: due,
            },
            {
                headers: { 'Content-Type' : 'application/json' }
            })
            .then(response => {
                const tasks = response.data;
                this.setState({ tasks });
                // console.log(response.data);
            });
    }

    onSubmit(e) {
        e.preventDefault()
        this.addTasks(
            this.state.tasks.task_name,
            this.state.tasks.task_desc,
            this.state.tasks.task_tag,
            this.state.tasks.due
        ).then(() => {this.getTasks()});
    }

    render() {
        return (
            <div>
                <button onClick={this.getTasks}>get tasks</button>
                <ul>
                    { this.state.tasks.map((task) => <li key={task.id}>{task.task_name}</li>)}
                </ul>
                <form className="form sticky-top jumbotron bg-dark" onSubmit={this.onSubmit.bind(this)}>
                    <div className="container">
                        <div className="input-group mb-2 mr-sm-2">
                            <input type="text" name="task_name" className="form-control col-md-9 col-sm-8" placeholder="Input task here..." />
                            <div className="input-group-prepend">
                                <div className="input-group-text">
                                    <strong>#</strong>
                                </div>
                            </div>
                            <input type="text" name="task_tag" className="form-control col-md-3 col-sm-4" placeholder="tag (optional)" />
                        </div>

                        <input type="text" className="form-control mb-2 mr-sm-2" name="task_desc" placeholder="Description here" />

                        <label className="sr-only" htmlFor="due">Due to</label>
                        <div className="input-group mb-2 mr-sm-2">
                            <div className="input-group-prepend">
                                <div className="input-group-text">
                                    <i className="fa fas fa-calendar-alt"></i>
                                </div>
                            </div>
                            <input type="date" name="due" className="form-control" placeholder="Due" />
                        </div>

                        <button type="submit" className="btn btn-primary mb-2 btn-sm">
                            <i className="fa fas fa-plus"></i> submit
                        </button>
                    </div>
                </form>
            </div>
        );
    };
}

export default Function;

if (document.getElementById('tasks')) {
    ReactDOM.render(<Function />, document.getElementById('tasks'));
}
