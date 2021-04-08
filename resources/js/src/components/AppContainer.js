import React from 'react';
import {Link} from "react-router-dom";

export const AppContainer = ({title,children}) => {
    return (
        <div className="container">
            <div className="card">
                <div class="card-header">
                    {title}
                </div>
                <div className="card-body">
                  {children}
                </div>
            </div>
        </div>
    )
}
