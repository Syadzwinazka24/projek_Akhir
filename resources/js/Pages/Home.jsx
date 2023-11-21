import React from 'react'
import {Link} from '@inertiajs/react';

export default function Home(){
    return (
        <div>
            <h1>Home</h1>
            <p>Welcome home!</p>

            <Link href="/about">About</Link>
        </div>
    )
}