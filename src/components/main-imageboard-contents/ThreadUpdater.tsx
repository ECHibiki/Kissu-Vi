import * as React from "react";

export type ThreadUpdaterProperties = {
    board:string,
    thread_id: any, // typescript bizzarely not letter me set this as number

    threadListUpdateSignal: (count_update:boolean)=>void
}

type ThreadUpdaterVariables = {
	timer_seconds:number
}

export class ThreadUpdater extends React.Component<ThreadUpdaterProperties, ThreadUpdaterVariables>{
	
	timer:number; 
	timer_increment:number = 5;
	timer_repetitions:number = 1;

	constructor(props:any){
		super(props);
		
		this.fireUpUpdater = this.fireUpUpdater.bind(this);
		//this.countDown = this.countDown.bind(this);

		this.state = {timer_seconds: 5}
	}

	componentDidMount(){
		this.timer = window.setInterval(() => this.countDown(), 1000);
	}
	
	componentWillUnmount(){
		clearInterval(this.timer);
	}

	countDown(){
		if(this.state.timer_seconds == 0){
console.log(this.timer_increment * this.timer_repetitions);
			this.timer_repetitions += 1;
			this.setState({timer_seconds : this.timer_increment * this.timer_repetitions});
			this.fireUpUpdater();
		}
		else{
			this.setState({timer_seconds: this.state.timer_seconds - 1});
		}
	}

	fireUpUpdater(){
		this.props.threadListUpdateSignal(true);
	}

	render(){
		return (<div id="updater"><a onClick={()=>{			
					this.setState({timer_seconds: this.timer_increment });
					this.fireUpUpdater();
					this.timer_repetitions = 1;
				}
			} style={{cursor:"pointer"}}>[Update]</a>&emsp;<span id="timer">[ {this.state.timer_seconds} ]</span></div>);
	}
}

