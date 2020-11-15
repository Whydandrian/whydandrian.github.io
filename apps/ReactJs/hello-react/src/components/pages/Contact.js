import React, { Component } from 'react';
import Header from '../Header';
import Contents from '../Contents';
import Footer from '../Footer';
class App extends Component {
  render() {
    return (
      <div class="container-fluid">
        <Header />
        <Contents />
        <Footer />
      </div>
    );
  }
}
export default App;