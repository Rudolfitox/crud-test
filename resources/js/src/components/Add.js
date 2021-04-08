import React from 'react';
import { AppContainer } from './AppContainer';


export const Add = () => {
    return (
       <AppContainer title="Add Order">
           <form>
               <div className="form-row mb-2">
                   <div className="col">
                        <input className="form-control" placeholder="Folio" type="text"/>
                   </div>
                   <div className="col">
                        <input className="form-control" type="date"/>
                   </div>
               </div>
               <div className="form-row mb-2">
                   <div className="col">
                        <select id="providers" className="form-control">
                            <option disabled selected>Proveedor *</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                   </div>
                   <div className="col">
                        <input className="form-control" placeholder="comentarios" type="text" />
                   </div>
               </div>
               <h3 className="text-center m-3">Productos</h3>
               <div className="form-row">
                   <div className="col">
                        <select className="form-control" id="products">
                                <option disabled selected>Seleccionar producto</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                        </select>
                    </div>
               </div>
               <button className="btn btn-primary btn-block mt-2">Agregar</button>
           </form>
       </AppContainer>
    )
}
