// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class ArxPolitiqueDeConfidentialite extends Component {

  static slug = 'simp-arx-politique-de-confidentialite';

  render() {
    // const Content = this.props.content;

    return (
      <React.Fragment>
        <h1 className="simp-arx-politique-de-confidentialite-heading">{this.props.heading}</h1>
        <p>{this.props.content()}</p> 
      </React.Fragment>
    );
  }
}

export default ArxPolitiqueDeConfidentialite;
