import axios from 'axios';

class Function extends Component {
    constructor() {
        super();

        this.state = {
            tasks : []
        };
    }

    componentDidMout()  {
        this.getTasks();
    }

    getTasks() {
        return axios
            .get('/api/tasks', {
                headers: { 'Content-Type' : 'application/json' }
            })
            .then(response => {
                this.setState({
                    tasks: [...data]
                }, () => {
                    console.log(this.state.tasks);
                })
            });
    }

    render() {
        return (
            <div>
                hello
            </div>
        );
    };
}

export default Function;

if (document.getElementById('tasks')) {
    ReactDOM.render(<Function />, document.getElementById('tasks'));
}
