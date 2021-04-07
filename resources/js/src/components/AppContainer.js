import React from 'react';
import {Link} from "react-router-dom";

export const AppContainer = ({title,children}) => {
    return (
        <div className="container">
            <div class="card">
                <div class="card-header">
                    {title}
                </div>
                <div class="card-body">
                  {children}
                </div>
            </div>
        </div>
    )
}
