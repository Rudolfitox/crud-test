import React from 'react';
import { AppContainer } from './AppContainer';


export const Add = () => {
    return (
       <AppContainer title="Add Order">
           <form>
               <div className="form-control">
                   <label>Folio</label>
               </div>
           </form>
       </AppContainer>
    )
}
