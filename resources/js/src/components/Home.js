import React from 'react';
import {Link} from "react-router-dom";
import { AppContainer } from './AppContainer';


export const Home = () => {
    return (
        <AppContainer title="Laravel ReactJs-CRUD">
            <Link to="/add" class="btn btn-primary">Go somewhere</Link>
            <div className="table-responsive">
                <table className="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Proveedor</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Estatus</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Example provider</td>
                            <td>Example date</td>
                            <td>Example total</td>
                            <td>Example Status</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">DELETE</a>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </AppContainer>
    )
}
