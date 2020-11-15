import React, {Component} from "react";
import { Navbar, Nav } from "react-bootstrap";
// Class Component Footer
class Footer extends Component {
  render() {
    return (
      <Navbar bg="light" expand="lg" fixed="bottom">
        <Navbar.Brand href="">React-Wahyudi</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
            <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="mr-auto justify-content-center">
            <Navbar.Text className="ml-4">
                Wahyudi Andrian @whydandrian
            </Navbar.Text>
          </Nav>
        </Navbar.Collapse>
      </Navbar>
    );
  }
}
export default Footer;