import React from 'react';
import ReactDOM from 'react-dom';
import { DatePicker } from 'antd';
import 'antd/dist/antd.css';
import { ApiCountries } from '../services/ApiCountries';
// import 'antd/dist/antd.less'

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                    <div>
                        <DatePicker />
                    </div>
                    <div>
                        <ApiCountries />
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
