import React, { Component } from "react";
import ReactDOM from "react-dom";
import Kuca from "./Kuca";
import Forma from "./Forma";

export default class Kuce extends Component {
    constructor(props) {
        super(props);

        this.state = {
            kuce: []
        };

        this.loadKuce();
        this.handleDelete = this.handleDelete.bind(this);
        this.handleInsert = this.handleInsert.bind(this);
    }
    loadKuce() {
        axios.get("http://127.0.0.1:8000/kuca/load").then(res => {
            const kuce = res.data.kuce;
            this.setState({ kuce: kuce });
        });
    }

    handleDelete(id) {
        let kucaID = id;
        axios.delete("http://127.0.0.1:8000/kuca/delete?id=" + id).then(res => {
            this.setState(state => {
                return { kuce: state.kuce.filter(kuca => kuca.id != kucaID) };
            });
        });
    }

    handleInsert(kuca) {
        axios
            .post("http://127.0.0.1:8000/kuca/insert", {
                adresa: kuca.adresa,
                grad: kuca.grad,
                drzava: kuca.drzava,
                kirija: kuca.kirija
            })
            .then(res => {
                const id = res.data.id;
                kuca = {
                    id: id,
                    ...kuca
                };
                let kuce = this.state.kuce;
                kuce.push(kuca);
                this.setState({ kuce });
            });
    }

    render() {
        return (
            <table class="table table-warning table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Adresa</th>
                        <th>Grad</th>
                        <th>Drzava</th>
                        <th>Kirija po danu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.kuce.map(kuca => {
                        return (
                            <Kuca
                                onDelete={this.handleDelete}
                                key={kuca.id}
                                kuca={kuca}
                            />
                        );
                    })}
                    <Forma dodavanje={this.handleInsert} />
                </tbody>
            </table>
        );
    }
}

if (document.getElementById("kuce")) {
    ReactDOM.render(<Kuce />, document.getElementById("kuce"));
}
