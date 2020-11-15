import React, {Component} from "react";
import { Navbar, Nav, NavDropdown } from "react-bootstrap";
// Class Component Header
class Header extends Component {
  render() {
    return (
      <Navbar bg="light" expand="lg">
        <Navbar.Brand href="#home" bold>WAHYUDI ANDRIAN</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav" className="ml-4">
          <Nav className="mr-auto" inline>
            <Nav.Link href="/">Home</Nav.Link>
            <Nav.Link href="/contact">Contact</Nav.Link>
            <NavDropdown title="Choose" id="basic-nav-dropdown">
              <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
            </NavDropdown>
          </Nav>
        </Navbar.Collapse>
      </Navbar>
    );
  }
}
export default Header;