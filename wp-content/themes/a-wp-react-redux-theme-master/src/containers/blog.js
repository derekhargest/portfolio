import React, {Component} from 'react';
import {connect} from 'react-redux';

import {fetchPosts} from '../actions/index';

import Header from '../components/header';
import Main from '../components/main';
import Footer from '../components/footer';

class Blog extends Component {
    componentWillMount() {
        this.getPosts(this.props, true);
    }

    componentWillReceiveProps(nextProps) {
        this.getPosts(nextProps);
    }

    getPosts(props, willMount = false) {
        if (props.params.pageNum !== this.props.params.pageNum || willMount || this.props.location.pathname !== props.location.pathname) {
            this.props.fetchPosts(props.params.pageNum || 1);
        }
    }

    componentDidUpdate(){
        document.title = `${RT_API.siteName} - ${RT_API.siteDescription}`;
    }

    render() {
        return (
            <section className="container-fluid">
                <Header />
                <Main posts={this.props.posts}
                      pageNum={this.props.params.pageNum || 1}
                      route={this.props.route.path || ''}
                      slug={this.props.params.slug || ''}/>
                <Footer />
            </section>
        );
    }
}

function mapStateToProps({posts}) {
    return {posts};
}

export default connect(mapStateToProps, {fetchPosts})(Blog)