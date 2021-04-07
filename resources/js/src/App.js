import React from "react";
import ReactDOM from "react-dom";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";
import { Add } from "./components/Add";
import { Edit } from "./components/Edit";
import { Home } from "./components/Home";

export const App = () => {
    return (
        <Router className="App_container">
            <Switch>
                <Route exact path="/">
                    <Home/>
                </Route>
                <Route path="/add">
                    <Add/>
                </Route>
                <Route path="/edit/:id">
                    <Edit/>
                </Route>
            </Switch>
        </Router>
    )
}

if (document.getElementById('example')) {
    ReactDOM.render(<App />, document.getElementById('example'));
}