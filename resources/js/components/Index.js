import React, { Component } from "react";
import ReactDOM from "react-dom";
import Kuce from "./Kuce";

export default class Index extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="container">
                <Kuce />
            </div>
        );
    }
}

if (document.getElementById("index")) {
    ReactDOM.render(<Index />, document.getElementById("index"));
}
