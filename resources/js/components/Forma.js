import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Forma extends Component {
    constructor(props) {
        super(props);

        this.state = {};

        this.insert = this.insert.bind(this);
    }

    inputiIzForme(e) {
        this.setState({
            [e.target.name]: e.target.value
        });
    }
    insert() {
        let kuca = {
            adresa: this.state.adresa,
            grad: this.state.grad,
            drzava: this.state.drzava,
            kirija: this.state.kirija
        };
        this.props.dodavanje(kuca);
    }

    render() {
        return (
            <tr>
                <td>
                    <input
                        onChange={this.inputiIzForme.bind(this)}
                        name="adresa"
                        type="text"
                    ></input>
                </td>
                <td>
                    <input
                        onChange={this.inputiIzForme.bind(this)}
                        name="grad"
                        type="text"
                    ></input>
                </td>
                <td>
                    <input
                        onChange={this.inputiIzForme.bind(this)}
                        name="drzava"
                        type="text"
                    ></input>
                </td>
                <td>
                    <input
                        onChange={this.inputiIzForme.bind(this)}
                        type="number"
                        name="kirija"
                    ></input>
                </td>
                <td>
                    <button onClick={this.insert} className="btn btn-primary">
                        Dodaj novu kucu
                    </button>
                </td>
            </tr>
        );
    }
}

if (document.getElementById("forma")) {
    ReactDOM.render(<Forma />, document.getElementById("forma"));
}
