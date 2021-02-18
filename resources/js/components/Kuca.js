import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Kuca extends Component {
    constructor(props) {
        super(props);

        this.state = {
            kuca: this.props.kuca
        };

        this.delete = this.delete.bind(this);
    }

    delete() {
        this.props.onDelete(this.state.kuca.id);
    }
    rentuj() {
        let date_od = prompt("Unesite datum rente u formatu", "GGGG-mm-dd");
        let trajanje = parseInt(prompt("Unesite broj dana", ""));
        let date_do = new Date(
            new Date(date_od).getTime() + 24 * 60 * 60 * 1000 * trajanje
        );

        let date_do_formatiran =
            date_do.getFullYear() +
            "-" +
            parseInt(date_do.getMonth() + 1) +
            "-" +
            date_do.getDate();
        axios.post("http://127.0.0.1:8000/renta/insert", {
            date_od: date_od,
            date_do: date_do_formatiran,
            kuca_id: this.state.kuca.id
        });
    }

    render() {
        return (
            <tr>
                <td>{this.state.kuca.adresa}</td>
                <td>{this.state.kuca.grad}</td>
                <td>{this.state.kuca.drzava}</td>
                <td>{this.state.kuca.kirija + "e"}</td>
                <td>
                    <button
                        onClick={this.delete}
                        className="btn btn-block btn-danger"
                    >
                        X
                    </button>
                    <button
                        onClick={this.rentuj.bind(this)}
                        className="btn btn-block btn-secondary"
                    >
                        Rentiraj
                    </button>
                </td>
            </tr>
        );
    }
}

if (document.getElementById("kuca")) {
    ReactDOM.render(<Kuca />, document.getElementById("kuca"));
}
