import React from 'react';
import {BrowserRouter, Route} from 'react-router-dom';
import App from './components/home/App';
const AppRouter = () => {
 return (
  <BrowserRouter>
   <div>
    <Route path='/' exact component={App} />
    <Route path='/contact' component={App} />
   </div>
  </BrowserRouter>
 );
};
export default AppRouter;