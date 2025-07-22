import pyautogui
import time
import random
import keyboard  
import pygame
import os



list1 = [
    "aah", "Abandon", "Abandonment", "Abate", "Aberration", "Abhor", "Abhorrent", "Abilities", "Able", "Abnormal",
    "abnormally", "aboard", "Abolish", "Abortion", "about", "Above", "Abridge", "abroad", "Absence", "Absent",
    "absentmindedly", "Absolute", "absolutely", "Absolve", "Absorb", "Abstract", "Absurd", "Abundance", "Abundant", "abundantly",
    "Abuse", "Academic", "Academy", "Accelerate", "Accelerated", "Accent", "Accentuate", "Accept", "Acceptable", "Acceptance",
    "Accessible", "Accidentally", "Acclimate", "Acclimatization", "Acclimatize", "Accommodate", "Accommodation", "Accompany", "Accomplish", "Accomplishment",
    "Accordance", "Accordingly", "Account", "Accountability", "Accountable", "Accountant", "accrual", "Accumulate", "Accumulation", "Accumulative",
    "Accuracy", "Accurate", "Accurately", "Accusation", "Accuse", "Accused", "acetylation", "ache", "Achieve", "Acid",
    "ack", "Acknowledge", "Acquaintance", "Acquiesce", "Acquire", "Acquisition", "Acre", "across", "act", "Activate",
    "Activation", "Active", "actively", "Activist", "Actual", "actually", "Actuate", "actus reus", "Acumen", "Acute",
    "acutely", "Adage", "Adapt", "Adaptable", "Adaptation", "Add", "Addict", "Addiction", "Additional", "Additionally",
    "Address", "Adept", "Adequate", "Adequately", "Adhere", "Adjacent", "adjudication", "Adjust", "Adjustment", "Administer",
    "Administration", "Administrative", "Administrator", "Admirable", "Admire", "admiringly", "Admission", "Admit", "admonish", "Adolescent",
    "Adopt", "Adoption", "Adulation", "Advance", "Adventurous", "Adversarial", "Adverse", "Adversity", "Advise", "Advocate",
    "Aesthetic", "Affable", "Affair", "Affection", "Affectionate", "affectionately", "affidavit", "Affinity", "Affirm", "affirmatively",
    "Affliction", "Affluent", "afford", "Affordable", "Afraid", "After", "aftereffect", "Aftermath", "afternoon", "afterthought",
    "Afterwards", "against", "Aged", "Agency", "Agenda", "Agglomerate", "Aggravate", "Aggregate", "aggregation", "Aggression",
    "Aggressive", "Agitate", "Agitated", "Agree", "Agreeable", "agreeably", "agreed", "Agricultural", "Agriculture", "ah",
    "aha", "ahem", "Aid", "Aide", "Aids", "ail", "airbag", "Aircraft", "airline", "airplane",
    "airport", "airtight", "Alacrity", "Alarm", "alas", "Albeit", "Alert", "algorithm", "Alien", "Alienate",
    "Align", "Alignment", "Alike", "Alive", "alkane", "All", "all right", "Allay", "Allegation", "Allege",
    "Allegedly", "Allegory", "allele", "Alleviate", "Alleviation", "Alliance", "Allocate", "Allocation", "Allow", "Allowance",
    "Allude", "Allusion", "Ally", "almost", "Alone", "along", "Alongside", "Alongside prep", "Aloof", "already",
    "Alter", "Altercation", "although", "Altogether", "Altruism", "Altruistic", "Aluminium", "Aluminum", "Always", "Amateur",
    "Amaze", "amazingly", "Ambassador", "Ambiguity", "Ambiguous", "Ambitious", "Ambivalence", "Ambivalent", "Ambulance", "Ameliorate",
    "amen", "Amend", "Amendment", "amicus", "Amid", "among", "amongst", "amortization", "Amount", "Amplify",
    "amplitude", "amuse", "Amusing", "Anachronistic", "analgesic", "Analogy", "analysis", "Analyst", "Analytical", "Analyze",
    "Ancestor", "Anchor", "Ancient", "and", "Anecdote", "anesthesia", "Angel", "angelfish", "Anger", "Angle",
    "angrily", "Angry", "Animation", "Annihilate", "Anniversary", "Annotate", "announce", "Annoy", "Annoyed", "annoyingly",
    "Annual", "Annually", "anomaly", "Anonymous", "another", "answer", "Antagonize", "Anticipate", "Anticipation", "Anticipatory",
    "antiseptic", "Anxiety", "Anxious", "anxiously", "anybody", "anyhow", "anyone", "anyplace", "anything", "anytime",
    "anyway", "anywhere", "Apart", "Apathetic", "Apex", "Aplomb", "Apocalyptic", "Apologize", "Apology", "apoptosis",
    "Apparatus", "Apparel", "Apparent", "Apparently", "appeal", "Appealing", "Appear", "Appease", "Appetite", "Applaud",
    "applesauce", "Applicable", "Applicant", "Application", "Apply", "Appoint", "appreciably", "Appreciate", "Appreciation", "Appreciative",
    "Apprehension", "Apprehensive", "Apprise", "Approach", "Approachable", "Appropriate", "Appropriately", "Approval", "Approve", "arbitrage",
    "Arbitrary", "arbitration", "Architectural", "Archive", "Arduous", "Arena", "argh", "Arguably", "Argue", "Argumentative",
    "Arise", "arithmetic", "Arm", "Arm (v)", "armchair", "Armed", "armhole", "armpit", "Arms", "around",
    "arrange", "array", "arrest", "Arrive", "Arrogant", "arrogantly", "Arrow", "arrowhead", "Articulate", "Artifice",
    "Artificial", "Artistic", "Artwork", "as", "as far as", "as if", "as long as", "as soon as", "as though", "as well as",
    "Ascend", "Ash", "Ashamed", "Aside", "ask", "Asleep", "Aspect", "Aspiration", "Aspire", "Assail",
    "Assassination", "Assault", "Assemble", "Assembly", "Assent", "Assert", "Assertion", "Assertive", "Assess", "Assessment",
    "asset", "Assign", "Assignments", "Assimilate", "Assist", "Assistance", "Associate", "Associated", "Association", "Assuage",
    "Assume", "Assumption", "Assurance", "Assure", "assuredly", "Astonishing", "astonishingly", "Astound", "astride", "Astute",
    "Asylum", "at", "Athletic", "atomicity", "atop", "Atrocity", "Atrophy", "Attach", "Attachment", "Attack",
    "Attain", "Attainable", "Attempt", "attend", "Attendance", "Attorney", "Attract", "Attractive", "Attribute", "Auction",
    "Audacious", "Audio", "Audit", "Auditory", "Augment", "Authentic", "Authenticate", "Authenticity", "Authorize", "Auto",
    "Automatic", "Automatically", "Autonomous", "Autonomy", "Autumn", "Avail", "Availability", "Avert", "Avoid", "avow",
    "aw", "Await", "Awake", "Aware", "Awareness", "Away", "awestruck", "awfully", "Awkward", "awkwardly",
    "axiom", "ay", "aye", "babble", "Back", "backache", "backbone", "Backdrop", "background", "backhand",
    "backhoe", "Backing", "backlog", "backpack", "backspace", "backstabbing", "backstroke", "Backup", "backwater", "backwoods",
    "backyard", "Bacteria", "bacterium", "Bad", "Badge", "badlands", "badly", "Baffle", "bagpipes", "bah"
]

list2 = [
    "Bail", "bailment", "bake", "balance", "Balanced", "Baleful", "balk", "Ballet", "Balloon", "Ballot",
    "ballplayer", "ban", "Banal", "bandage", "bang", "Banish", "Bankruptcy", "Banner", "bantamweight", "Bar",
    "barcode", "Bare", "barefoot", "Barely", "Bargain", "bark", "barnstorm", "barnyard", "barrage", "Barrel",
    "Barricade", "Barrier", "barring", "barter", "basalt", "baseball", "Basement", "bashfully", "Basically", "Basket",
    "basketball", "Bass", "Bass1", "baste", "Bat", "batch", "bathe", "bathmat", "bathrobe", "bathroom",
    "bathtub", "bathwater", "Battle", "battleaxe", "battlecruiser", "battlecry", "Battlefield", "battleship", "bawl", "Bay",
    "Bayesian", "be", "beachcomber", "Beam", "beancurd", "bear", "Bear (deal with)", "Beast", "Beat", "Beautiful",
    "beautifully", "because", "become", "bedrock", "bedroom", "bedspread", "bedtime", "beehive", "beekeeper", "beekeeping",
    "beeswax", "Before", "beforehand", "befriend", "Beg", "Begin", "begrudgingly", "Beguile", "Behalf", "behave",
    "Behavioral", "behind", "Being", "believably", "believe", "bellflower", "bellhop", "Bellicose", "bellow", "bellyache",
    "belong", "Beloved", "Below", "Bench", "benchmark", "bend", "Beneath", "Benefactor", "Beneficial", "Beneficiary",
    "Benevolent", "Benign", "Bent", "berate", "Bereft", "Beside", "Beside prep", "Besides", "Besides prep", "besiege",
    "Bestow", "Bet", "Betray", "Better", "between", "Beverage", "bewilderedly", "bewilderingly", "Beyond", "Bias",
    "Biased", "Bid", "Big", "Bilingual", "Bill", "billboard", "binary", "Bind", "binomial", "Biography",
    "Biological", "biopsy", "Birth", "birthday", "birthplace", "birthrate", "birthright", "Bishop", "bite", "Bitter",
    "bitterly", "bitterroot", "bittersweet", "Bizarre", "Black", "blackberry", "blackbird", "blackboard", "blackout", "Blade",
    "Blame", "Blanket", "Blasphemy", "Blast", "Blatant", "bleach", "bleakly", "Bleed", "Blend", "Bless",
    "Blessing", "Blight", "Blind", "blindly", "blink", "blissfully", "blockbuster", "blockchain", "blot", "Blow",
    "Bludgeon", "bluebells", "blueberry", "bluebird", "bluebonnets", "Blunder", "Blunt", "blurt", "blush", "Bluster",
    "Boast", "boastfully", "bob", "bobcat", "bobtail", "bodyguard", "Boil", "Boisterous", "Bold", "boldly",
    "Bolster", "bolt", "bomb", "Bombing", "bond", "Bonus", "boo hoo", "book", "bookbinder", "bookcase",
    "Booking", "bookkeeper", "bookmark", "bookmobile", "bookshelf", "bookworm", "Boom", "Boost", "Border", "bore",
    "Boring", "borrow", "bother", "Bottom", "Bounce", "Bound", "Boundary", "Bow", "bowlegged", "box",
    "boxcar", "boxcutter", "boxsprings", "boy", "boyishly", "brag", "brain", "brainstorm", "brainwash", "brake",
    "branch", "brand", "branding", "Brave", "bravely", "Breach", "bread", "breadbasket", "breadbox", "breadcrumbs",
    "breadfruit", "breadknife", "breadstick", "break", "breakdance", "Breakdown", "breakfast", "breakfront", "breakneck", "breakout",
    "Breakthrough", "breakup", "breakwater", "Breast", "breastbone", "breaststroke", "breath", "breathe", "Breed", "Brevity",
    "Brick", "bridegroom", "bridge", "Brief", "briefcase", "Briefly", "Bright", "brightly", "Brilliant", "brilliantly",
    "bring", "briskly", "Broach", "Broad", "Broadband", "broadcast", "Broadcaster", "Broadly", "broil", "brother",
    "browbeat", "brown", "Browser", "brr", "bruise", "brush", "Brutal", "brutally", "bubble", "Buck",
    "bucktoothed", "Buddy", "Budget", "buffer", "Bug", "Build", "building", "Bulk", "bulkhead", "bulldog",
    "bulldozer", "Bullet", "bullfrog", "bump", "Bunch", "buoyancy", "Burden", "Bureaucracy", "Burial", "Burn",
    "burnish", "Burst", "bury", "bus", "Bush", "busily", "business", "businessman", "businesswoman", "Busy",
    "but", "But (prep)", "buttercup", "butterfingers", "butterfly", "buttermilk", "button", "buttonhole", "Buy", "buyer",
    "buzz", "by", "by golly", "by the time", "bye", "bygone"
]

list3 = [
    "Chief", "chiefly", "child", "childbirth", "childcare", "childfreeh", "childhood", "childishly", "childlike", "childproof",
    "childrearing", "chin up", "chip", "chiral", "chlorophyll", "chocolate", "choice", "Choir", "choke", "chomp",
    "choose", "Chop", "chopstick", "chromatography", "chromosome", "Chronic", "Chunk", "church", "churn", "cigarette",
    "circa", "Circuit", "Circulate", "Circulation", "Circumspect", "Circumstance", "Circumstantial", "Circumvent", "Cite", "Citizen",
    "Citizenship", "city", "Civic", "Civil", "Civilian", "Civilization", "claim", "Clandestine", "clap", "Clarification",
    "Clarify", "Clarity", "Clash", "class", "Classic", "Classification", "Classify", "classmate", "classroom", "classwork",
    "Clean", "cleanly", "Clear", "clearly", "Clerk", "Clever", "cleverly", "click", "client", "Cliff",
    "climate", "climb", "Cling", "Clinic", "Clinical", "Clip", "clock", "clockwise", "clockwork", "Close",
    "Closed", "Closely", "closet", "Closure", "clothes", "clotheshorse", "cloud", "cloudily", "Cloudy", "club",
    "clue", "clumsily", "Clumsy", "cluster", "coach", "Coagulate", "Coalesce", "Coalition", "coast", "Coastal",
    "coastline", "coat", "coaxingly", "cobweb", "Cocktail", "code", "Coerce", "coffee", "Cogent", "Cognitive",
    "Cognizant", "Coherent", "Cohesion", "coil", "Coincide", "Coincidence", "coincidentally", "Cold", "coldframe", "coldhearted",
    "coldly", "coldsore", "Collaborate", "Collaboration", "Collaborative", "Collaborator", "Collapse", "collar", "collect", "collection",
    "Collective", "Collector", "college", "Collision", "Colloquial", "Collusion", "Colonial", "Colony", "color", "colorfully",
    "Colourful", "Columnist", "comb", "Combat", "combination", "Combine", "come", "come on", "Comfort", "Comfortable",
    "comfortably", "Comic", "Command", "Commander", "Commence", "Commencement", "comment", "Commentary", "Commentator", "Commerce",
    "commercial", "Commission", "Commissioner", "commit", "Commitment", "Committee", "Commodity", "Common", "Commonly", "commonsense",
    "Communicate", "communication", "Communist", "community", "comorbidity", "compactly", "Companion", "company", "Comparable", "Comparative",
    "Compare", "Comparison", "Compassion", "Compassionate", "compassionately", "Compel", "Compelling", "Compensate", "Compensation", "compete",
    "Competence", "Competent", "competition", "Competitive", "Compile", "compiler", "complain", "complaint", "Complement", "Complementary",
    "Complete", "completely", "Completion", "Complex", "Complexity", "Compliance", "Complicated", "Complication", "Compliment", "Comply",
    "Component", "Compose", "Composer", "Composition", "Compound", "Comprehend", "Comprehension", "Comprehensive", "compressive", "Comprise",
    "Compromise", "Compulsory", "Compute", "computer", "Concatenate", "Conceal", "Concede", "Conceive", "Concentrate", "Concentration",
    "Concept", "Conception", "Concern", "Concerned", "concerning", "concert", "Concession", "Concise", "Conclude", "conclusion",
    "Conclusive", "Concrete", "Concur", "concurrency", "Condemn", "condition", "Condone", "Conducive", "Conduct", "conductivity",
    "Confer", "conference", "Confess", "Confession", "Confidant", "Confide", "Confidence", "Confident", "Configuration", "Confine",
    "Confirm", "Confirmation", "Conflagration", "Conflate", "Conflict", "Conform", "Conformance", "Conformity", "Confound", "Confront",
    "Confrontation", "Confrontational", "Confuse", "confusedly", "Confusing", "Confusion", "Congratulate", "Congregation", "Congressional", "connect",
    "connection", "Connotation", "Connote", "Conquer", "Conscience", "Conscientious", "Conscious", "Consciousness", "Consecutive", "Consensus",
    "Consent", "consequence", "Consequently", "Conservation", "Conservative", "Conserve", "consider", "Considerable", "Considerably", "Considerate",
    "considerately", "Consideration", "considering", "consist", "consistency", "Consistent", "Consistently", "Consolidate", "Consolidation", "Conspicuous",
    "Conspiracy", "Constant", "Constantly", "Constituency", "Constitute", "Constitution", "Constitutional", "Constrain", "Constraint", "Construct",
    "Construction", "Construe", "Consult", "Consultant", "Consultation", "Consummate", "Consumption", "contact", "contain", "container",
    "Contaminate", "Contemplate", "Contemporary", "Contempt", "Contend", "Contender", "Content", "Content2", "Contention", "Contest",
    "context", "Contingent", "Continually", "Continue", "continuous", "continuously", "Contract", "Contractor", "Contradict", "Contradiction",
    "Contradictory", "Contrary", "Contrast", "Contribute", "Contribution", "Contributor", "Contrite", "Contrive", "Control", "Controversial",
    "Controversy", "Conundrum", "convection", "Convenience", "Convention", "Conventional", "Converge", "convergence", "conversation", "Conversion",
    "Convert", "Convey", "conveyance", "Convict", "Conviction", "Convince", "Convinced", "Convincing", "Convolute", "Convoluted",
    "cook", "cookbook", "Cooked", "cookie", "cookout", "cooktop", "cookwear", "Cool", "coolly", "Cooperate",
    "Cooperation", "Cooperative", "Coordinate", "Coordinated", "Coordination", "Coordinator", "Cop", "Cope", "Copious", "Copper",
    "copy", "copycat", "Copyright", "copywriter", "Core", "corkscrew", "cornbread", "corncob", "corndog", "corner",
    "cornfield", "cornflower", "cornmeal", "cornstalk", "corollary", "Corporate", "Corporation", "corpus", "Correct", "Correction",
    "correctly", "Correlate", "Correlation", "Correspond", "Correspondence", "Correspondent", "Corresponding", "Corridor", "Corroborate", "Corrupt",
    "Corruption", "cost", "Costly", "cottonmouth", "cough", "Council", "Councillor", "Councilor", "Counselling", "Counsellor",
    "count", "countdown", "Counter", "Counter (argue)", "Counter (flat surface)", "counterattack", "counterbalance", "counterclockwise", "Counterfeit", "Counterpart",
    "counterweight", "Countless", "country", "countryside", "County", "Coup", "couple", "coupon", "Courage", "Courageous",
    "courageously", "course", "court", "Courtesy", "courthouse", "courtyard", "cousin", "covariance", "cover", "Coverage",
    "Covered", "covertly", "covet", "cow", "Cowardly", "cowbell", "Cowboy", "cowgirl", "cowslip", "crabgrass",
    "Crack", "Craft", "craftsman", "Crash", "crave", "crawfish", "Crawl", "crazily", "Crazy", "cream",
    "Create", "Creation", "creative", "Creativity", "Creator", "Creature", "Credibility", "Credible", "Credit", "Creep"
]

list4 = [
    "Crew", "crikey", "Crisis", "Criterion", "Critic", "Critical", "Critically", "Criticism", "Criticize", "Critique",
    "croak", "crochet", "Crooked", "Crop", "cross", "cross-examine", "crossbow", "crossly", "crossroad", "crosswalk",
    "crossword", "crowbar", "crowd", "Crowded", "Crown", "Crucial", "Crude", "Cruel", "cruelly", "Cruise",
    "Crush", "Cry", "cryogenics", "cryptography", "Crystal", "cubbyhole", "Cue", "Cult", "Cultivate", "Culture",
    "Cumbersome", "Cumulative", "cunningly", "cup", "cupboard", "cupcake", "Curate", "Cure", "Curiosity", "Curious",
    "curiously", "curl", "currency", "current", "currently", "Curriculum", "curse", "curses", "cursor", "Cursory",
    "Curve", "Curved", "Custody", "customarily", "customer", "cut", "cutaway", "cutback", "Cute", "cutely",
    "cutoff", "cutthroat", "Cutting", "cutup", "cycle", "Cynical", "cytokinesis", "dad", "daemon", "daily",
    "daintily", "Dairy", "Dam", "damage", "Damaging", "damping", "dance", "dangerously", "Dare", "daredevil",
    "daringly", "Dark", "darkly", "Darkness", "darkroom", "dashboard", "dastardly", "data", "Database", "dataset",
    "Date", "daughter", "Dawn", "Day", "daybreak", "daydream", "daylight", "daytime", "Dead", "Deadline",
    "Deadly", "deal", "Dealer", "dear", "dear me", "dearly", "Dearth", "Death", "Debate", "Debilitate",
    "Debris", "Debt", "debugging", "Debunk", "Debut", "decay", "deceive", "Decent", "decently", "Deceptive",
    "decide", "decipher", "decision", "Decision-making", "Decisive", "Deck", "Declaration", "Declare", "Decline", "decorate",
    "Decoration", "Decrease", "Dedicate", "Dedicated", "Dedication", "Deed", "Deem", "deep", "Deeply", "Default",
    "Defeat", "Defect", "Defence", "Defend", "Defender", "Defenestrate", "Defensible", "Defensive", "Defer", "Deference",
    "Deferential", "defiantly", "Deficiency", "Deficient", "Deficit", "Definable", "Define", "Defining", "Definite", "definition",
    "deflation", "Deft", "deftly", "Defunct", "Defuse", "Defy", "Degrade", "degree", "Delay", "Delegate",
    "Delegation", "Delete", "Deliberate", "Deliberately", "Delicate", "delicately", "Delight", "Delighted", "delightfully", "Deliver",
    "Delivery", "Demand", "Democracy", "Democratic", "Demolish", "Demon", "Demonstrate", "Demonstration", "Demonstrative", "Denial",
    "denormalization", "Denote", "Denounce", "Dense", "densely", "Density", "Deny", "Depart", "department", "departure",
    "depend", "Dependable", "Dependence", "Dependent", "Depict", "Deplore", "Deploy", "Deployment", "Deposit", "Deprecate",
    "depreciation", "Depress", "Depressed", "Depressing", "Depression", "Deprive", "Depth", "Deputy", "Deride", "derivative",
    "Derive", "Descend", "Descent", "describe", "description", "Desert", "Deserve", "Design", "Designate", "designer",
    "Desirable", "Desire", "Desist", "desk", "Desktop", "Desperate", "Desperately", "despite", "Destruction", "Destructive",
    "Detach", "Detail", "Detailed", "Detain", "Detect", "Detection", "Detention", "Deter", "Deteriorate", "Determination",
    "Determine", "Detest", "Detract", "Detrimental", "Devastate", "Develop", "development", "Deviation", "device", "Devil",
    "Devise", "Devote", "Diagnose", "Diagnosis", "diagonally", "dial", "dialysis", "diamond", "Dictate", "Dictator",
    "die", "dielectric", "diet", "difference", "Differentiate", "differentiation", "differently", "difficulty", "diffusion", "dig",
    "digress", "Diligence", "diligently", "Dimension", "dimly", "dimwit", "dinner", "diode", "Direct", "direction",
    "directly", "director", "dirt", "disaster", "Disband", "Discerning", "Discipline", "disclose", "discount", "Discrepancy",
    "discrete", "Discuss", "discussion", "disease", "dish", "dishcloth", "dishwasher", "disk", "dislike", "disorderly",
    "display", "disruptive", "Dissipate", "distance", "Distinct", "Distinction", "Distinguished", "Distribute", "distribution", "district",
    "dive", "Diverge", "divergence", "Diverse", "Diversify", "Divert", "Divide", "dividend", "Divine", "Division",
    "divisively", "Divorce", "divulge", "DNS", "do", "Docile", "docilely", "dock", "doctor", "Doctrine",
    "Document", "Documentation", "dog", "dogcatcher", "dogfish", "doggone", "doghouse", "dogwood", "dole", "Domain",
    "Domestic", "Dominance", "Dominant", "Dominate", "Donate", "Donation", "Donor", "door", "doorbell", "doorknob",
    "doorman", "doormat", "doorstep", "doorstop", "doorway", "dopily", "Dormant", "Dose", "Dot", "dote",
    "double", "doubt", "Doubtful", "doubtfully", "doughnut", "Down", "downburst", "downcast", "downdraft", "downfall",
    "downhill", "downhome", "downlink", "download", "downpayment", "downplay", "downpour", "downrate", "downright", "downscale",
    "downshift", "downsize", "downstairs", "downstream", "downstroke", "downthrow", "Downtown", "downtrodden", "downturn", "downunder",
    "downward", "Downwards", "downwind", "Dozen", "Draft", "Drag", "dragonfly", "Drain", "drainpipe", "drama",
    "Dramatic", "Dramatically", "drat", "draw", "drawer", "drawing", "dreadnought", "dream", "dreamily", "dress",
    "dressmaker", "Drift", "driftwood", "drill", "drink", "drip", "drive", "driver", "driveway", "Driving",
    "drone", "drop", "dropout", "Drought", "Drown", "drugstore", "drumbeat", "drumstick", "Drunk", "Dry",
    "Dual", "Dub", "Dubious", "duckbill", "ductility", "due", "due process", "dugout", "duh", "Dull",
    "Dumb", "dumbbell", "Dump", "Duo", "dupe", "durability", "Duration", "during", "dust", "dustpan",
    "duststorm", "duty", "Dwell", "dye", "Dynamic", "dynamics", "E", "Eager", "eagerly", "ear",
    "earache", "eardrum", "earlobe", "early", "earmark", "earmuff", "Earn", "earnestly", "Earnings", "earphone",
    "earring", "earshot", "earth", "earthbound", "earthquake", "earthward", "earthworm", "earwig", "Ease", "easement"
]

list5 = [
    "easily", "East", "Easy", "easy does it", "eat", "eavesdrop", "EBITDA", "Eccentric", "Eccentricity", "Echo",
    "Ecological", "Economics", "Economist", "economy", "edge", "Edit", "Edition", "editor", "Editorial", "Educate",
    "education", "Educator", "eek", "effect", "Effective", "Effectiveness", "efficacy", "Efficiency", "Efficient", "Efficiently",
    "effort", "effortlessly", "egads", "egg", "eggbeater", "eggcup", "egghead", "eggnog", "eggplant", "eggroll",
    "eggshell", "Ego", "Egoistic", "eigenvalue", "Elaborate", "elaborately", "Elaboration", "elasticity", "Elation", "Elbow",
    "Elderly", "Elect", "election", "Electoral", "Electronics", "Elegance", "Elegant", "elegantly", "Elementary", "Elevate",
    "Elevation", "elevator", "Elicit", "Eligible", "Eliminate", "Elite", "Elongate", "elope", "eloquently", "Elsewhere",
    "Elucidate", "Elusive", "Embark", "embarrass", "Embarrassment", "Embassy", "Embed", "Embellish", "Embody", "Embolden",
    "Embrace", "Emerge", "Emergence", "emergency", "emigrate", "Emission", "emit", "emotion", "Emotional", "Emotionally",
    "Emotive", "Empathetic", "Emphasis", "Emphasize", "Emphasizing", "Empire", "Empirical", "employ", "employee", "employer",
    "employment", "Empower", "Empty", "Enable", "Enact", "enantiomer", "Encapsulate", "encapsulation", "enchant", "encode",
    "Encompass", "Encompassing", "Encounter", "encourage", "Encouragement", "Encouraging", "encryption", "End", "Endeavor", "Endeavour",
    "Endless", "endlessly", "Endorse", "Endorsement", "endothermic", "endpoint", "Endure", "Enduring", "energetically", "energy",
    "Enforce", "Enforcement", "Engage", "Engaged", "Engagement", "Engaging", "engine", "engineer", "engineering", "Enhance",
    "Enhancing", "enjoin", "enjoy", "Enjoyable", "enjoyably", "Enlightened", "enormously", "enough", "Enquire", "Enquiry",
    "Enrich", "Enrichment", "Enrol", "Enroll", "Ensue", "Ensure", "Entail", "entanglement", "enter", "Enterprise",
    "entertain", "Entertaining", "entertainment", "Enthrall", "Enthusiasm", "Enthusiast", "Enthusiastic", "enthusiastically", "Entire", "Entirely",
    "Entitle", "Entity", "entrance", "Entrench", "Entrepreneur", "entrophy", "entropy", "entry", "Enumerate", "enunciate",
    "Envelope", "Environment", "Environmental", "Envision", "envy", "enzyme", "Ephemeral", "epidemic", "epidemiology", "epigenetics",
    "Equal", "Equality", "equally", "Equation", "Equilibrium", "Equip", "equipment", "equity", "Equivalent", "equivocate",
    "er", "Era", "Erect", "Erratic", "error", "Erupt", "Escalate", "escape", "Esoteric", "especially",
    "Espouse", "essay", "Essence", "Essentially", "Establish", "Establishment", "Estate", "esterification", "Estimate", "estoppel",
    "Eternal", "eternally", "Ethic", "Ethical", "ethically", "Ethnic", "eukaryote", "Evacuate", "Evade", "Evaluate",
    "Evaluation", "Evaluative", "evaporate", "Even", "even if", "even though", "Evening", "evenly", "event", "eventually",
    "evergreen", "everlasting", "evermore", "every", "everybody", "everyday", "everyone", "everything", "everywhere", "evidence",
    "Evident", "evidently", "Evil", "evocatively", "Evoke", "Evolution", "Evolutionary", "Evolve", "Exacerbate", "exactly",
    "Exaggerate", "exam", "Examination", "Examine", "example", "Exasperate", "Excavate", "Exceed", "Exceeding", "exceedingly",
    "Excellence", "Excellently", "except", "excepting", "Exception", "Exceptional", "exceptionally", "Excess", "Excessive", "exchange",
    "Excite", "excitedly", "excitement", "Exciting", "exclaim", "Exclude", "excluding", "Exclusion", "Exclusive", "Exclusively",
    "exculpatory", "Excuse", "Execrable", "Execute", "Execution", "Executive", "Exemplary", "Exemplify", "Exemption", "exercise",
    "Exert", "Exhibit", "Exhort", "Exhume", "Exile", "exist", "Existence", "Exit", "Exonerate", "Exorbitant",
    "Exorcise", "exothermic", "Exotic", "Expand", "Expansion", "Expect", "Expectation", "Expedite", "Expedition", "Expeditious",
    "expel", "Expend", "Expenditure", "Expense", "Expensive", "Experience", "Experimental", "expert", "Expertise", "Expire",
    "Explain", "explanation", "Explicit", "Explicitly", "explode", "Exploit", "Exploitation", "Exploration", "Explore", "Explosive",
    "Exponential", "Exponentially", "Expose", "Exposure", "Express", "expression", "Expressive", "expressly", "Exquisite", "Extend",
    "extension", "Extensive", "Extensively", "Extent", "External", "externally", "Extol", "extoll", "extra", "Extract",
    "extraordinarily", "Extraordinary", "Extrapolate", "Extreme", "extremely", "Extremist", "eye", "eyeball", "eyebrow", "eyeglasses",
    "eyelash", "eyelid", "eyesight", "eyewitness", "Fabric", "Fabricate", "Fabulous", "Face", "Facet", "Facetious",
    "Facile", "Facilitate", "Facilitation", "Facility", "fact", "Faction", "factor", "Faculty", "Fade", "Fail",
    "Failed", "failing", "Failure", "fair enough", "fairly", "Fairness", "Faith", "faithfully", "Fake", "fall",
    "fallout", "falter", "Fame", "Familiar", "family", "famously", "fan", "fanfare", "Fantasy", "Far",
    "Fare", "farewell", "farm", "farmer", "farmhouse", "farmyard", "farsighted", "fashionably", "Fast", "fasten",
    "Fat", "Fatal", "fatally", "Fate", "father", "fatherland", "Fathom", "Fault", "favor", "Favorable",
    "favorably", "Favour", "Favourable", "fax", "fear", "Feasibility", "Feasible", "Feat", "Feather", "Feature",
    "Feckless", "Federal", "Fee", "Feed", "Feedback", "Feel", "feeling", "Feign", "Fellow", "Felony",
    "female", "Feminist", "fence", "ferociously", "Fervent", "fervently", "fetch", "Fever", "few", "Fiber",
    "Fibre", "Fiction", "fiddle-dee-dee", "fiddlesticks", "fiduciary", "fie", "field", "Fierce", "fiercely", "fiery",
    "fight", "Figure", "File", "fill", "film", "Film-maker", "Filmmaker", "Filter", "final", "Finality",
    "finally", "Finance", "financially", "find", "Finding", "Fine", "finger", "fingernail", "fingerprint", "fingertip",
    "finish", "Finished", "finitely", "Fire", "Firearm", "fireboat", "firebug", "Firefighter", "firefly", "fireman"
]

list6 = [
    "fireplace", "fireproofed", "firewall", "firewood", "Firework", "fireworks", "Firm", "Firmly", "First", "firsthand",
    "Fiscal", "fish", "fishbowl", "fishcake", "fisherman", "fisherwoman", "fisheye", "fishhook", "fishing", "fishnet",
    "Fit", "Fix", "Fixture", "flagpole", "Flame", "flap", "flapjacks", "Flash", "flashlight", "flatfish",
    "Flavour", "Flaw", "Flawed", "Flee", "Fleet", "Flesh", "Flexibility", "Flexible", "flight", "Float",
    "flood", "floodlight", "floor", "floorboard", "floss", "Flounder", "Flourish", "Flout", "flow", "flower",
    "flowerbed", "flowerpot", "Fluctuate", "fluently", "Fluid", "flux", "fly", "flyby", "flyweight", "flywheel",
    "Focus", "foghorn", "Fold", "Folding", "folklore", "Follow", "Following", "Fond", "fondly", "foo",
    "food", "fooey", "Fool", "foolishly", "foolproof", "foot", "Footage", "football", "foothills", "footlights",
    "footman", "footnote", "footprint", "footrest", "footstep", "footstool", "footwear", "for", "Forbearance", "Forbid",
    "Force", "Forecast", "Forecasting", "foreclose", "Foreigner", "foreman", "foremost", "Foreseeable", "foreshadow", "foresight",
    "foretell", "forever", "Forge", "forget", "Forgive", "form", "formal", "formally", "Format", "Formation",
    "Former", "Formerly", "Formidable", "Formula", "Formulate", "Formulation", "Forsaking", "Forth", "Forthcoming", "forthwith",
    "Fortify", "Fortunate", "fortunately", "Fortune", "Forum", "Forward", "Fossil", "Foster", "Found", "Foundation",
    "Founder", "foursquare", "foxglove", "foxhole", "Fraction", "Fragile", "Fragment", "fragmentation", "frame", "Framework",
    "Franchise", "Frankly", "Frantic", "frantically", "Fraud", "Free", "Freedom", "Freely", "freeway", "Freeze",
    "frenetically", "Frequency", "Frequent", "frequently", "Freshman", "freshwater", "fret", "Friction", "friend", "Friendly",
    "friendship", "frighten", "Frivolous", "frogman", "from", "front", "frostbite", "frostbitten", "Frown", "Frugal",
    "fruit", "fruitcake", "Frustrate", "Frustrated", "Frustrating", "Frustration", "fry", "Fuel", "Fulfil", "Fulfill",
    "Fulfillment", "Full-time", "Fully", "fume", "fun", "Function", "Functional", "Functionality", "Fund", "Fundamental",
    "Fundamentally", "Funding", "Fundraising", "Funeral", "funnel", "funny", "Furious", "furiously", "Furthermore", "Futile",
    "future", "g'day", "gadzooks", "gah", "Gain", "gallbladder", "Gallon", "gallstone", "Galvanize", "Gambling",
    "game", "Gaming", "Gang", "gangway", "gap", "garage", "garbage", "garden", "Garner", "gas",
    "gasp", "gate", "gateway", "gather", "Gathering", "Gay", "Gaze", "Gear", "gearshift", "gee",
    "gee whiz", "geez", "gel", "gemstone", "Gender", "Gene", "general", "Generalization", "generally", "Generate",
    "Generic", "generously", "Genetic", "Genius", "Genocide", "genome", "genotype", "Genre", "Gentle", "gentleman",
    "gently", "Genuine", "Genuinely", "geometric", "Germane", "Gesture", "gesundheit", "get", "get lost", "get outta here",
    "ghostwriter", "Giant", "gift", "Gig", "gild", "gingerale", "gingerbread", "girl", "girlfriend", "girlishly",
    "Give", "glad", "gladly", "Glance", "glass", "gleefully", "glide", "Glimpse", "Global", "Globalization",
    "Globe", "globetrotter", "Gloomy", "Glorious", "Glory", "glove", "glowworm", "glue", "gnaw", "Go",
    "go on", "Goal", "Goal-oriented", "goalkeeper", "goalpost", "god", "gold", "Golden", "goldenrod", "goldfinch",
    "goldfish", "goldmine", "goldrush", "goldsmith", "golf", "Good", "good golly", "good job", "goodlooking", "Goodness",
    "goodnight", "Gorgeous", "gosh", "Govern", "governance", "government", "Governor", "Grab", "Grace", "gracefully",
    "gracious", "graciously", "Grade", "gradient", "Gradual", "Gradually", "Grand", "grandchild", "granddaughter", "grandfather",
    "grandma", "grandmother", "grandpa", "grandparent", "grandson", "grandstand", "Grant", "grapefruit", "grapevine", "graph",
    "Graphic", "Graphics", "Grasp", "grass", "grasshopper", "grasslands", "grate", "gratefully", "Gratification", "Grave",
    "Grave (cemetery)", "Grave (serious)", "gravestone", "graveyard", "gravity", "grease", "great", "Greatly", "greedily", "green",
    "greenback", "greengrocer", "greenhorn", "Greenhouse", "Greenland", "greenlight", "greet", "greyhound", "Grid", "Grief",
    "Grievance", "grill", "grimly", "Grin", "Grind", "grindstone", "Grip", "groan", "Grocery", "Gross",
    "ground", "groundbreaking", "groundcover", "groundhog", "groundskeeper", "groundspeed", "groundwork", "group", "grow", "growl",
    "grownup", "growth", "grr", "grudgingly", "grumble", "grunt", "Guarantee", "guard", "Guerrilla", "guess",
    "guest", "Guidance", "guide", "guidebook", "Guideline", "guidepost", "Guilt", "Guilty", "guitar", "gulp",
    "gumdrop", "gunfire", "gunmetal", "gunpowder", "gurgle", "gush", "Gut", "guy", "ha", "ha-ha",
    "habeas", "habit", "Habitat", "habitually", "hacksaw", "hah", "Hail", "hailstone", "hailstorm", "hair",
    "hairbrush", "haircut", "hairdo", "hairdresser", "hairline", "half", "half-heartedly", "halfback", "halfhearted", "Halfway",
    "halfwit", "hall", "hallelujah", "hallway", "Halt", "hammer", "hand", "handbag", "handball", "handbook",
    "handcuff", "Handful", "handgrenade", "handgun", "handheld", "handhold", "handily", "handkerchief", "Handle", "handlebars",
    "Handling", "handmade", "handover", "handprint", "handpuppet", "handrail", "handset", "handshake", "handsomely", "handspring",
    "handstand", "handwaving", "handwork", "handwriting", "Handy", "handyman", "hang", "hangman", "hangnail", "hangout",
    "haphazardly", "happen", "happily", "Happy", "harass", "Harassment", "Harbinger", "Harbour", "Hard", "hardheaded",
    "hardhearted", "hardtop", "Hardware", "hardwire", "Harm", "Harmful", "harmonic", "Harmonious", "harmoniously", "Harmonize"
]

list7  = [
    "Harmony", "harness", "harrumph", "Harsh", "harshly", "Harvest", "hastily", "hat", "hate", "hatefully",
    "Hatred", "Haunt", "hauntingly", "have", "haw", "hayfever", "hayfield", "hayfork", "hayloft", "hayride",
    "haystack", "haywire", "Hazard", "hazelnut", "head", "headache", "headboard", "headdress", "headfirst", "headhunter",
    "headland", "headlight", "headline", "headphone", "Headquarters", "headrest", "headset", "headstand", "headstone", "headwaters",
    "headway", "Heal", "health", "Healthcare", "healthily", "heap", "hear", "Hearing", "hearsay", "heart",
    "heartbeat", "heartburn", "heartily", "heartsick", "heat", "Heaven", "heavily", "Heavy", "heavyweight", "hedge",
    "hedgehog", "hee", "Heedful", "Heel", "height", "Heighten", "Hell", "hello", "Helmet", "help",
    "Helpful", "helpfully", "Hence", "Herb", "here", "hereafter", "heretofore", "Heritage", "Hero", "herringbone",
    "herself", "Hesitate", "heuristic", "hey", "Hidden", "Hide", "hideaway", "Hierarchy", "High", "High-profile",
    "highbrow", "highchair", "highflier", "highground", "highhanded", "highjack", "highlander", "highlands", "Highlight", "highly",
    "highpoint", "highrise", "highroad", "highschool", "hightail", "hightops", "highwater", "Highway", "highwayman", "highwire",
    "hijack", "Hilarious", "hillside", "hilltop", "himself", "hinder", "hindsight", "Hint", "Hip", "Hire",
    "hiss", "Historian", "history", "hit", "hitherto", "hmm", "ho hum", "hogtie", "hogwash", "Hold",
    "hole", "holiday", "Holistic", "Hollow", "hollyhock", "Holy", "home", "homecoming", "Homeland", "Homeless",
    "homemade", "homeowner", "homesick", "homeward", "homework", "homomorphism", "Honest", "honestly", "Honesty", "Honey",
    "honeybee", "honeycomb", "honeydew", "honeymoon", "Honor", "Honour", "hoo", "Hook", "hookworm", "hooray",
    "hoot", "hop", "hope", "Hopeful", "Hopefully", "hopelessly", "hopscotch", "Horizon", "Horizontal", "horizontally",
    "Horn", "horror", "horse", "horseback", "horsefly", "horselaugh", "horseman", "horseplay", "horsepower", "horseradish",
    "horseshoe", "hospital", "Host", "Hostage", "Hostile", "Hostility", "Hot", "hot dog", "hotbed", "hotcake",
    "hotdog", "hotel", "hothead", "hotheaded", "hothouse", "hotline", "hotrod", "hotshot", "hotsprings", "hottub",
    "hotwire", "hour", "hourglass", "hourly", "House", "houseboat", "housebreaking", "housecoat", "houseflies", "Household",
    "housekeeper", "housewarming", "housewife", "housework", "Housing", "hover", "hovercraft", "how", "however", "howl",
    "huckleberry", "hug", "Huge", "hugely", "huh", "hum", "human", "Humanitarian", "Humanity", "humankind",
    "Humble", "humbug", "humdrum", "hummingbird", "Humorous", "humorously", "Humour", "humpback", "hunchback", "Hunger",
    "hungrily", "Hungry", "Hunt", "Hunting", "hurray", "hurriedly", "hurry", "Hurt", "husband", "huzza",
    "Hydrogen", "hydrolysis", "Hypothesis", "hysterically", "I", "I say", "ice", "iceberg", "icefish", "icily",
    "ick", "Icon", "Id", "idea", "Ideal", "Identical", "identifiably", "Identification", "Identify", "Ideological",
    "Ideology", "Idiot", "idiotically", "Idle", "if", "if only", "Ignorance", "Ignorant", "ignore", "Ill",
    "Illegal", "Illogical", "Illusion", "Illustrate", "Illustration", "image", "Imagery", "Imagination", "Imaginative", "imaginatively",
    "imagine", "Imitate", "Immaculate", "Immature", "immeasurably", "immediately", "Immense", "immensely", "immigrate", "Immigration",
    "Imminent", "Immune", "immunology", "Impact", "Impactful", "Impartial", "Impasse", "Impatient", "impatiently", "Impeccable",
    "impedance", "Impede", "Impel", "Impetus", "Implement", "Implementation", "Implication", "Implicit", "Implore", "Imply",
    "importance", "Important", "Impose", "Imposing", "Impossible", "Impostor", "Impoverished", "Impractical", "Impregnable", "Impress",
    "Impressed", "impression", "Impressive", "impressively", "Imprint", "Imprison", "Imprisonment", "Improve", "improvement", "Improvise",
    "Improvised", "Impulsive", "In", "in addition to", "in as much as", "in case", "in order that", "Inability", "Inaccessible", "Inaccurate",
    "Inactive", "Inadequate", "Inappropriate", "inappropriately", "Inarticulate", "Incantation", "Incapable", "Incarcerate", "Incarceration", "Incentive",
    "Incentivize", "incessantly", "Inch", "inchworm", "Incidence", "Incident", "Inclined", "Include", "including", "Inclusion",
    "Incoherent", "Income", "Incompetent", "Incomplete", "Incongruent", "Inconsistent", "Inconstant", "Incorporate", "Incorrect", "incorrectly",
    "Increase", "Increasingly", "Incredible", "Increment", "Inculcate", "Inculpate", "Incumbent", "Incur", "Indecisive", "indeed",
    "indemnity", "Independence", "Independent", "independently", "Index", "Indication", "Indicator", "Indictment", "Indifferent", "Indigenous",
    "Indirect", "Indispensable", "Individual", "Individualistic", "indoor", "indoors", "indubitably", "Induce", "induction", "inductor",
    "Indulge", "Industrial", "industry", "Ineffable", "Inefficient", "Ineloquent", "Inept", "Inequality", "inertia", "Inevitability",
    "Inevitable", "Inevitably", "Inexorable", "Infamous", "Infant", "Infect", "Infection", "Infer", "Inference", "Inferior",
    "Inferiority", "Inferno", "infinitely", "Inflammatory", "Inflate", "Inflation", "Inflexible", "Inflict", "Influence", "Influential",
    "Info", "Inform", "informally", "information", "Informed", "Infrastructure", "infrequently", "Infuriate", "Infuse", "Ingenious",
    "Ingrained", "Inhabitant", "Inherent", "Inherit", "Inhibit", "Inhibition", "Initial", "Initially", "Initiate", "Initiative",
    "Inject", "Injection", "injunction", "injure", "injury", "Injustice", "Ink", "inkblot", "inland", "inlet",
    "Inmate", "Inner", "Innocent", "innocently", "Innovate", "Innovation", "Innovative", "Input", "Inquire", "inquisitively",
    "Insane", "insect", "Insecure", "Insensitive", "Insert", "Insertion", "Inside", "Insider", "Insidious", "Insight",
    "Insightful", "Insinuate", "Insipid", "Insist", "Inspect", "Inspection", "Inspector", "Inspiration", "Inspire", "Inspiring"
]

list8 = [
    "Instability", "Install", "Installation", "Instance", "Instant", "Instantly", "instep", "Instigate", "Instinct", "Institute",
    "Institution", "Institutional", "Instruct", "instruction", "Instrumental", "Insubordinate", "Insufficient", "Insult", "Insurance", "Intact",
    "Intake", "integral", "Integrate", "Integrated", "Integration", "Integrative", "Integrity", "Intellectual", "Intelligent", "intelligently",
    "intend", "Intended", "Intense", "intensely", "Intensify", "Intensity", "Intensive", "Intent", "intention", "intently",
    "Interact", "Interaction", "Interactive", "Intercede", "Interdependence", "Interdependent", "interest", "Interesting", "interestingly", "interface",
    "Interfere", "Interference", "Interim", "Interior", "interject", "Intermediate", "Intermittent", "intermittently", "Internal", "Internalize",
    "internally", "International", "internet", "Interpret", "Interpretation", "Interrupt", "Interrupted", "Intersection", "Interval", "Intervene",
    "Intervention", "interview", "intestate", "Intimate", "into", "Intolerant", "Intrepid", "Intricate", "Intriguing", "Intrinsic",
    "Introduce", "introduction", "Inundate", "Invade", "Invalidate", "Invaluable", "invariably", "Invasion", "Inveigh", "invent",
    "Inventive", "Inventory", "invest", "Investigate", "Investigation", "Investigator", "Investment", "Investor", "Invigorate", "Invisible",
    "invisibly", "invite", "Invoke", "Involve", "Involvement", "Invulnerable", "inward", "inwardly", "Irate", "iron",
    "Ironic", "Ironically", "Irony", "Irrational", "Irrefutable", "irrefutably", "Irrelevant", "Irreparable", "Irrevocable", "irritably",
    "Irritate", "is it", "island", "Isolate", "Isolated", "isolation", "isomer", "isomorphism", "Issue", "it",
    "itch", "item", "iteration", "itself", "ixnay", "jab", "jabber", "jacket", "jackfruit", "jackknife",
    "jackpot", "jaggedly", "Jail", "jam", "Jargon", "jauntily", "jawbone", "jawbreaker", "jaybird", "jaywalker",
    "jealously", "jeer", "jeez", "jellybean", "jellyfish", "jest", "Jet", "jigsaw", "jitterbug", "job",
    "jog", "join", "Joint", "joke", "jolt", "Journalism", "jovially", "Joy", "Joyful", "joyfully",
    "joylessly", "joyously", "joystick", "Jubilant", "jubilantly", "judge", "Judgement", "judgment", "judgmentally", "Judicial",
    "juggle", "juice", "jump", "jumpsuit", "Junction", "Junior", "jurisdiction", "jurisprudence", "Jury", "Just",
    "just a sec", "just as", "just kidding", "just wondering", "Justice", "Justification", "Justify", "justly", "Juxtapose", "K",
    "kapish", "Keen", "keenly", "keep", "keepsake", "kernel", "kettledrum", "key", "keyboard", "keyhole",
    "keystone", "keyword", "kick", "kickoff", "kid", "kiddingly", "Kidnap", "Kidney", "kill", "killjoy",
    "Kind", "Kindergarten", "kindhearted", "kindheartedly", "kindly", "kinematics", "king", "Kingdom", "kiss", "Kit",
    "kitchen", "knapsack", "knavishly", "knee", "kneecap", "kneel", "knife", "knit", "knock", "knockout",
    "knot", "knottily", "know", "knowingly", "Knowledge", "knowledgeably", "kookily", "KPI", "kurtosis", "la",
    "la-di-dah", "lab", "label", "Labour", "lack", "Lackluster", "Laconic", "Lad", "Ladder", "lady",
    "ladybird", "ladybug", "lake", "lakebed", "lakeside", "lament", "land", "landfall", "landform", "Landing",
    "Landlord", "Landmark", "landowner", "Landscape", "landslide", "Lane", "language", "Languish", "Languor", "Lap",
    "Large", "Large-scale", "Largely", "larkspur", "Laser", "Last", "lastly", "late", "Lately", "latency",
    "later", "Lateral", "Latest", "Latter", "Laugh", "laughingstock", "Launch", "law", "Lawmaker", "Lawn",
    "lawnmower", "Lawsuit", "lawyer", "lay", "layer", "Layout", "layover", "lazily", "Lazy", "Lead",
    "leader", "Leadership", "leading", "Leaflet", "League", "Leak", "Lean", "Leap", "leapfrog", "Learn",
    "Least", "leather", "Leave", "lecture", "lefthanded", "leftovers", "leftwing", "leg", "Legacy", "Legal",
    "Legend", "Legendary", "Legislation", "Legislative", "Legislature", "Legitimacy", "Legitimate", "lemma", "lend", "length",
    "Lengthy", "Lens", "Lesbian", "Less", "Lesser", "lesson", "lest", "let", "Lethal", "Lethargic",
    "Lethargy", "letter", "Level", "levelheaded", "Leverage", "Levitate", "liability", "Liable", "Liaison", "Liberal",
    "Liberation", "Liberty", "library", "Licence", "License", "lick", "Lie", "life", "lifeboat", "lifeguard",
    "Lifeless", "Lifelong", "lifestyle", "Lifetime", "lift", "liftoff", "Light", "lighten", "lightheaded", "lighthearted",
    "lighthouse", "Lighting", "lightly", "lightweight", "Like", "Likelihood", "Likely", "Likewise", "Limb", "limelight",
    "limestone", "limit", "Limitation", "Limited", "limply", "Line", "Line-up", "Linear", "linebacker", "linedancing",
    "lineman", "lineup", "Linger", "link", "lionheart", "lip", "lipid", "lipstick", "Liquid", "liquidity",
    "list", "listen", "Listing", "Liter", "Literacy", "Literally", "Literary", "literature", "lithely", "lithosphere",
    "litigation", "Litre", "Litter", "litterbug", "Little", "live", "Lively", "Liver", "livestock", "living",
    "lo", "Load", "Loan", "Lobby", "Local", "location", "lock", "locksmith", "loftily", "Log",
    "loggerheads", "Logic", "Logical", "logjam", "Logo", "Lonely", "Long", "long time", "Long-standing", "Long-term",
    "Long-time", "longhand", "longingly", "longshoreman", "look", "look here", "lookout", "Loom", "Loop", "loophole",
    "Loose", "loosely", "loosen", "lopsided", "Lord", "lordy", "Lose", "loss", "Lost", "Lottery",
    "Loud", "loudly", "loudmouth", "Love", "lovesick", "lovingly", "Low", "lowbrow", "Lower", "lowland",
    "lowlife", "Loyal", "loyally", "Loyalty", "Lucid", "luck", "luckily", "lukewarm", "lumberjack", "lunch",
    "lunchroom", "Lung", "lungfish", "Lustrous", "luxuriously", "Lyric", "M", "machine", "Machinery", "madly"
]

list9 = [
    "magazine", "Magical", "magically", "Magistrate", "Magnanimous", "Magnetic", "Magnificent", "Magnify", "Magnitude", "mail",
    "mailbox", "mailman", "main", "Mainland", "mainly", "Mainstream", "Maintain", "Maintenance", "majestically", "Major",
    "Majority", "Make", "Make-up", "makeshift", "Makeup", "Making", "Malcontent", "male", "Malevolent", "Malicious",
    "Malignant", "mall", "Malleable", "Man", "manage", "management", "manager", "mandate", "Mandatory", "manhole",
    "manhunt", "Manifest", "manifold", "Manipulate", "Manipulation", "mankind", "manner", "manpower", "Manual", "Manufacture",
    "manufacturer", "Manufacturing", "Manuscript", "many", "Map", "mar", "Marathon", "March", "margin", "Marginal",
    "Marine", "mark", "markedly", "Marker", "market", "marketing", "Marketplace", "Markov", "marksman", "marriage",
    "Married", "marry", "Martial", "marvel", "Marvelous", "Mask", "Mass", "Massacre", "Massive", "Master",
    "mastermind", "masterpiece", "match", "matchbook", "Matching", "matchmaker", "Mate", "Material", "materially", "math",
    "Mathematical", "matrix", "matter", "Mature", "Maximiser", "Maximize", "Maximum", "maybe", "mayflower", "Mayor",
    "meal", "mealtime", "mean", "meaning", "Meaningful", "meaningfully", "meanly", "Means", "Meantime", "meanwhile",
    "measurably", "Measure", "Measurement", "meat", "meatball", "meatloaf", "Mechanic", "Mechanical", "mechanically", "Mechanism",
    "Medal", "media", "median", "Mediate", "Mediator", "medically", "Medication", "medicine", "Medieval", "Mediocre",
    "Meditation", "Medium", "meet", "meeting", "meh", "meiosis", "Melody", "Melt", "member", "Membership",
    "Memo", "Memoir", "Memorable", "Memorial", "memorize", "memory", "menacingly", "mend", "mens rea", "mention",
    "Mentor", "menu", "Merchant", "Mercy", "Mere", "Merely", "Merge", "Merger", "Merit", "merrily",
    "mess", "message", "Messy", "metabolite", "metadata", "metal", "metamorphic", "Metaphor", "method", "Methodical",
    "methodically", "Methodology", "methylation", "Meticulous", "metric", "microservice", "middle", "middleman", "middleware", "midnight",
    "midshipman", "Midst", "might", "mightily", "Migration", "milestone", "Militant", "Military", "Militia", "milk",
    "milkshake", "Mill", "mind", "mine", "Miner", "Mineral", "Minimal", "Minimalist", "Minimize", "Minimum",
    "Mining", "Minister", "Ministry", "Minor", "Minority", "minus", "Minute", "Miracle", "mirror", "Misconstrue",
    "Miserable", "miserably", "Misery", "Misleading", "Misnomer", "miss", "Missile", "Mission", "Mistake", "Mistrust",
    "Mitigate", "mitochondria", "mitosis", "Mix", "Mixed", "mixture", "mmm", "moan", "Mob", "Mobile",
    "Mobility", "Mobilize", "Mock", "mockingbird", "mockingly", "mockup", "Mode", "Model", "Moderate", "Modern",
    "Modest", "Modesty", "Modification", "Modify", "Modulate", "Module", "modulus", "Moist", "molt", "mom",
    "moment", "Momentum", "money", "Monitor", "Monk", "Monopoly", "Monster", "month", "Monthly", "Monument",
    "mood", "moonbeam", "moonlight", "moonstruck", "moor", "Moral", "Morality", "morally", "morbidity", "More",
    "Moreover", "Morning", "mortality", "mortally", "Mortgage", "Mosque", "Mosquito", "Most", "most certainly", "mostly",
    "mother", "Motion", "Motivate", "Motivated", "Motivation", "Motive", "Motor", "motorboat", "motorcycle", "Motorist",
    "Mount", "mountain", "mourn", "mouse", "mousetrap", "mouth", "mouthpiece", "Move", "movie", "Moving",
    "mow", "MTU", "much", "mud", "mug", "multicast", "Multiple", "Multiply", "mumble", "Mundane",
    "Municipal", "murder", "muscle", "music", "muskrat", "mutter", "Mutual", "my", "my my", "my word",
    "myself", "Mysterious", "mysteriously", "Myth", "nag", "nah", "nail", "Naive", "Naked", "name",
    "Namely", "namesake", "namespace", "nap", "Narrow", "nastily", "Nasty", "nation", "National", "Nationwide",
    "native", "Natural", "naturally", "nature", "naughtily", "Naval", "Navigate", "Navigation", "naw", "Near",
    "Nearby", "nearly", "nearsighted", "Neat", "neatly", "nebula", "necessary", "Necessity", "neck", "neckline",
    "necktie", "need", "needily", "needlepoint", "needlework", "Nefarious", "Negative", "negatively", "Neglect", "negligence",
    "Negligent", "Negligible", "Negotiate", "Negotiation", "Neighboring", "Neighbouring", "Nerve", "nervously", "Nest", "Net",
    "Network", "neuropathy", "Neutral", "Never", "Nevertheless", "New", "newborn", "newcomer", "Newly", "news",
    "Newsletter", "newspaper", "newsstand", "newsworthy", "next", "nicely", "Niche", "Nickel", "Night", "nightfall",
    "nightgown", "nightly", "Nightmare", "nightshift", "nightstand", "nighttime", "Nihilism", "nitwit", "no", "no can do",
    "no matter how", "no thanks", "no way", "Noble", "nobleman", "nobody", "Nod", "noise", "noisily", "Noisy",
    "Nominate", "Nomination", "Nominee", "Non-profit", "nonce", "Nonchalant", "None", "Nonessential", "Nonetheless", "Nonsense",
    "Noon", "nooo", "nor", "Norm", "Normal", "normalization", "normally", "North", "northeast", "northwest",
    "nose", "nosebleed", "nosedive", "nosily", "not", "Notable", "Notably", "note", "Notebook", "noteworthy",
    "Nothing", "notice", "Noticeable", "Notify", "Notion", "Notorious", "notwithstanding", "Novel", "Novelist", "Now",
    "now that", "Nowadays", "nowhere", "nucleotide", "nullspace", "number", "numbly", "Numerous", "nurse", "Nursery",
    "Nursing", "Nurture", "Nutrition", "nuts", "nutshell", "oatmeal", "obediently", "Obesity", "Obey", "Obfuscate",
    "Obfuscation", "Object", "Objectify", "Objection", "Objective", "Obligation", "Oblige", "obligingly", "Obliterate", "obnoxiously",
    "Observation", "Observe", "Observer", "Obsess", "Obsession", "Obsolete", "Obstacle", "Obstruction", "Obtain", "Obvious"
]

list10 = [
    "obviously", "occasion", "Occasional", "Occasionally", "Occupation", "Occupied", "Occupy", "occur", "Occurrence", "Odd",
    "oddly", "Odds", "of", "Off", "Offence", "Offend", "Offender", "Offensive", "offensively", "offer",
    "Offering", "office", "officer", "Official", "officially", "offline", "Offset", "offshoot", "offshore", "offside",
    "Offspring", "Often", "ogle", "oh", "oh no", "oh-oh", "oho", "oil", "oilcan", "okay",
    "okey-dokey", "om", "Ominous", "ominously", "Omit", "on", "onboarding", "once", "oncology", "oncoming",
    "one", "oneself", "Ongoing", "online", "onlooker", "only", "only if", "onrush", "onset", "onto",
    "onward", "oof", "ooh", "oopsey", "Opaque", "Open", "openhanded", "Opening", "Openly", "Opera",
    "Operate", "operation", "Operational", "Operator", "opinion", "Opinionated", "Opponent", "opportunity", "Oppose", "Opposed",
    "opposite", "Opposition", "Oppress", "Opt", "Optical", "Optimal", "Optimism", "Optimist", "Optimistic", "optimistically",
    "Optimize", "Optimized", "Option", "or", "Oral", "orange", "Orchestra", "orchestration", "order", "orderly",
    "ordinarily", "Ordinary", "Organ", "organelle", "Organic", "organization", "Organizational", "Organized", "Orientation", "Origin",
    "Original", "Originate", "Oscillate", "other", "Otherwise", "ourselves", "Out", "outbid", "Outbreak", "outburst",
    "outcast", "Outcome", "outcropping", "outcry", "outdated", "outdo", "outdoors", "outdoorsman", "Outer", "outfield",
    "Outfit", "outflow", "outfox", "outgas", "outgoing", "outgrown", "outhouse", "Outing", "outlast", "outlaw",
    "outlay", "Outlet", "Outline", "outlive", "Outlook", "outlying", "outnumber", "outpost", "Output", "Outrage",
    "outrageously", "outrank", "outrun", "outshine", "outside", "Outsider", "outskirts", "outsmart", "outsource", "outspoken",
    "Outstanding", "outstay", "outstretched", "outtake", "outward", "outwardly", "outwards", "oven", "over", "overabundant",
    "overachieve", "overact", "overactive", "overage", "Overall", "overalls", "overarching", "overbearing", "overbite", "overblown",
    "overboard", "overbooked", "overburden", "overcast", "overcharge", "overcoat", "Overcome", "overcompensate", "overconfidently", "overcook",
    "overcrowd", "overdo", "overdose", "overdraft", "overdressed", "overdrive", "overdue", "overeager", "overeat", "overexposed",
    "overfill", "overflow", "overfull", "overgrown", "overhand", "overhang", "overhaul", "overhead", "overhear", "overheat",
    "overkill", "overland", "overlap", "overlay", "overload", "Overlook", "overlord", "Overly", "overlying", "Overnight",
    "overpack", "overpaid", "overpay", "overpower", "overrate", "overreach", "overreact", "override", "overrule", "overrun",
    "Overseas", "Oversee", "overseer", "overshoe", "oversight", "oversleep", "overstate", "overstretched", "overtake", "overtaxed",
    "overthrow", "overtime", "Overturn", "overuse", "overvalue", "overview", "overweight", "Overwhelm", "Overwhelming", "overwork",
    "Owe", "own", "owner", "Ownership", "oxbow", "oxidation", "Oxygen", "oy", "oyez", "Pace",
    "pack", "Package", "packet", "Pad", "paddle", "page", "pain", "painfully", "painlessly", "paint",
    "painting", "pair", "Palliative", "Palm", "Palpable", "Palpitate", "pancake", "pandemic", "Panel", "panhandle",
    "Panic", "pant", "Pantheon", "paper", "paperback", "paperweight", "paperwork", "Parade", "paradigm", "paradoxically",
    "Paragon", "Parallel", "Paralyze", "Parameter", "Pardon", "parent", "Parental", "Parish", "park", "parking",
    "parkway", "Parliament", "Parliamentary", "Parody", "part", "Part-time", "Partial", "Partially", "Participant", "Participate",
    "Participation", "Particular", "particularly", "partition", "Partly", "partner", "Partnership", "party", "Pass", "Passage",
    "passageway", "passbook", "passenger", "passerby", "Passing", "passion", "Passionate", "passionately", "passionflower", "passionfruit",
    "Passive", "passkey", "passport", "Password", "past", "paste", "Pastor", "pastureland", "pat", "Patch",
    "patchwork", "Patent", "path", "pathfinder", "pathogenesis", "pathology", "Pathway", "Patience", "Patient", "patiently",
    "Patrol", "Patron", "pattern", "Pause", "pawnbroker", "pay", "payment", "payroll", "Peace", "peacekeeper",
    "peacemaker", "Peak", "peanut", "peanutbutter", "peapod", "Peasant", "peck", "Peculiar", "pedal", "peel",
    "peep", "Peer", "peg", "pelt", "pen", "Penalty", "penknife", "Pension", "people", "peppercorn",
    "peppermint", "peptide", "per", "Perceive", "percentage", "Perceptible", "Perception", "Perceptive", "Perennial", "Perfect",
    "perfectly", "Perform", "Performance", "Perfunctory", "period", "periodically", "Periphery", "Permanent", "Permanently", "Permeate",
    "permission", "Permit", "permutation", "Perpetual", "perpetually", "Perpetuate", "Perplex", "Persist", "Persistent", "persistently",
    "person", "personal", "personality", "personally", "Personnel", "Perspective", "Persuade", "Persuasive", "persuasively", "Pertinent",
    "Pervasive", "pester", "pet", "Petition", "pew", "pff", "Pharmacy", "Phase", "Phenomenon", "phenotype",
    "phew", "Philosopher", "Philosophical", "Philosophy", "phone", "phosphorylation", "photo", "photonics", "photovoltaic", "phrase",
    "phylogeny", "physical", "physically", "Physician", "physics", "piano", "Pick", "pickax", "pickpocket", "picture",
    "pie", "piece", "piecrust", "pigeonhole", "piggyback", "pigpen", "pigskin", "pigsty", "pigtail", "pillbox",
    "pillowcase", "pin", "pinch", "pincushion", "pine", "pineapple", "pinecone", "pinpoint", "pinprick", "pinup",
    "pinwheel", "pipe", "pipefish", "pipeline", "pish posh", "pitbull", "pitch", "pitchfork", "pivot", "Pivotal",
    "pizza", "place", "placebo", "plainclothes", "plainly", "plan", "plane", "plant", "plasmid", "plastic",
    "plate", "platform", "Plausible", "play", "player", "playfully", "playground", "playpen", "plaything", "plead"
]

list11 = [
    "please", "pleasure", "pledge", "Plenary", "plenty", "plow", "plug", "plugin", "plus", "plywood",
    "pocketbook", "pocketknife", "poem", "poet", "poetically", "poetry", "poignantly", "point", "pointer", "poke",
    "polecat", "polestar", "polevault", "police", "policeman", "policewoman", "policy", "polish", "politely", "politics",
    "pollution", "polymer", "polymerization", "ponder", "pool", "poorly", "pop", "popcorn", "popover", "population",
    "portfolio", "position", "positioning", "Positive", "positively", "Possess", "possession", "possibility", "possible", "possibly",
    "post", "Post-war", "postcard", "postmark", "postmaster", "Postpone", "Postulate", "pot", "potato", "Potential",
    "Potentially", "potholder", "pothole", "potluck", "potpie", "pound", "pour", "Power", "powerboat", "powerfully",
    "powerhouse", "Practical", "Practicality", "practice", "Practitioner", "Pragmatic", "Praise", "praiseworthy", "pray", "Preach",
    "Precarious", "Precaution", "Precede", "Precedent", "Preceding", "Precious", "Precipitate", "Precise", "Precisely", "Precision",
    "Preclude", "Precursor", "Predator", "Predecessor", "Predict", "Predictable", "Predominant", "Predominantly", "prefer", "Preference",
    "Pregnancy", "Pregnant", "Prejudice", "Preliminary", "Premier", "Premise", "Premium", "Preparation", "Prepare", "Prescribe",
    "Prescription", "Presence", "Present", "presentation", "Presently", "Preservation", "Preserve", "Preside", "Presidency", "president",
    "Presidential", "press", "pressure", "Prestigious", "Presumably", "Presume", "pretend", "prettily", "Prevail", "Prevailing",
    "Prevalence", "Prevalent", "Prevent", "Prevention", "Previous", "previously", "Prey", "Price", "prick", "Pride",
    "priest", "Primarily", "primary", "Prime", "primly", "primrose", "Principal", "principally", "Principle", "Print",
    "printout", "Prior", "Priority", "prism", "Privacy", "Private", "Privatization", "Privilege", "prize", "Proactive",
    "probability", "Probable", "probably", "probate", "Probe", "Problem", "Problematic", "Procedure", "Proceed", "Proceeding",
    "Proceedings", "Proceeds", "Process", "Processing", "Processor", "Proclaim", "Prodigious", "Prodigy", "Produce", "product",
    "Productive", "Productivity", "profess", "profession", "Professional", "professor", "Proficiency", "Proficient", "profile", "profit",
    "Profitable", "Profound", "program", "Programming", "Progress", "Progressive", "Prohibit", "Project", "Projection", "prokaryote",
    "Proliferate", "Prolific", "Prolong", "Prominent", "promise", "Promising", "Promote", "Promotion", "Prompt", "promptly",
    "Pronounced", "Proof", "proofread", "Propaganda", "Propagate", "Propensity", "properly", "property", "Propitious", "Proportion",
    "Proportional", "Proposal", "Propose", "Proposition", "Propriety", "Prosecute", "Prosecution", "Prosecutor", "Prospect", "Prospective",
    "Prosperity", "Protect", "Protection", "Protective", "Protein", "proteome", "protest", "Protester", "protocol", "proudly",
    "Prove", "provide", "provided that", "Province", "Provincial", "Provision", "Provisional", "Provoke", "Proximity", "proxy",
    "pry", "psst", "Psychiatric", "Psychological", "Psychologist", "Psychology", "ptui", "public", "Publication", "Publicity",
    "Publishing", "Puerile", "pull", "pullover", "pulsar", "Pulse", "Pump", "Punch", "punctually", "puncture",
    "punish", "Punk", "Pupil", "Purchase", "Pure", "purebred", "Purely", "purple", "Purpose", "Pursue",
    "Pursuit", "push", "pushcart", "pushover", "put", "Puzzle", "puzzlingly", "pyrolysis", "quaintly", "Quality",
    "Quantifiable", "Quantify", "quantile", "quantity", "quantum", "quarter", "quarterback", "quarterhorse", "quartermaster", "quartile",
    "quasar", "queasily", "queen", "Quell", "query", "Quest", "question", "questionably", "questioningly", "Questionnaire",
    "queue", "Quick", "quicker", "quickfire", "quickly", "quicksand", "quicksilver", "Quiet", "quietly", "quilt",
    "Quintessential", "quirkily", "quit", "quite", "Quixotic", "quiz", "quizzically", "Quota", "quote", "race",
    "racecar", "racecourse", "racehorse", "racetrack", "Racial", "Racism", "Racist", "Radar", "radiate", "Radiation",
    "radical", "radio", "radiography", "Rage", "rah", "Raid", "Rail", "railroad", "railway", "rain",
    "rainbow", "raincoat", "rainfall", "rainout", "rainstorm", "Raise", "Rally", "Ramify", "Random", "randomly",
    "Range", "Rank", "Ranking", "rant", "Rape", "Rapid", "Rapidly", "Rare", "rarely", "Rat",
    "Rate", "Rating", "ratio", "Rational", "rats", "rattlesnake", "rave", "Raw", "Ray", "Reach",
    "React", "reaction", "Reactivate", "read", "Readily", "reading", "ready", "Reaffirm", "Realign", "Realistic",
    "reality", "Realization", "Realize", "really", "Realm", "Rear", "reason", "Reasonable", "Reasonably", "Reasoning",
    "Reassure", "reassuringly", "Rebel", "Rebellion", "rebuff", "Rebuild", "Rebuttal", "Recalcitrant", "Recall", "Recant",
    "Receive", "Receiver", "recently", "reception", "Recession", "recipe", "Recipient", "Reciprocal", "Reciprocate", "recite",
    "Reckless", "recklessly", "Reckon", "Reclusive", "Recognition", "Recognize", "recommend", "recommendation", "Reconcile", "Reconstruct",
    "Reconstruction", "record", "recording", "Recount", "Recount1", "Recover", "Recovery", "Recruit", "Recruitment", "Rectify",
    "recursion", "red", "redcoat", "redeye", "redhead", "Redress", "Reduce", "reduction", "Redundant", "redwood",
    "Reestablish", "Referee", "reference", "Referendum", "Refine", "Reflect", "Reflection", "Reflective", "Reform", "refraction",
    "refrigerator", "Refuge", "Refugee", "Refurbish", "Refusal", "refuse", "Refute", "Regain", "Regard", "regarding",
    "Regardless", "Regenerate", "Regime", "region", "Regional", "Register", "Registration", "registry", "Regret", "regular",
    "regularly", "Regulate", "Regulation", "Regulator", "Regulatory", "Rehabilitate", "Rehabilitation", "Reign", "reindeer", "Reinforce",
    "Reinforcement", "Reinvigorate", "reiterate", "Reject", "Rejection", "Rejoice", "Rejuvenate", "Relate", "relation", "relationship"
]

list12 = [
    "Relative", "Relatively", "relax", "release", "Relegate", "Relentless", "Relevance", "Relevancy", "Relevant", "Reliability",
    "Reliable", "reliably", "Relief", "Relieve", "Relieved", "Relinquish", "Relocate", "Reluctance", "Reluctant", "reluctantly",
    "Rely", "remain", "Remainder", "Remains", "Remark", "Remarkable", "Remarkably", "Remediate", "Remedy", "Remember",
    "remind", "Reminder", "Remonstrate", "remote", "Removal", "Remove", "Render", "Renew", "Renowned", "rent",
    "Rental", "Repair", "repeat", "repeatedly", "replace", "Replacement", "Replenish", "Replete", "replication", "reply",
    "report", "Reportedly", "Reporting", "repository", "Representation", "Representative", "Repress", "Reprieve", "Reprimand", "Reproach",
    "reproachfully", "Reproduce", "Reproduction", "Republic", "Reputation", "request", "Requirement", "Requisite", "Rescind", "Rescue",
    "research", "Resemble", "resentfully", "Reserve", "Reside", "Residence", "Resident", "Residential", "Residue", "Resign",
    "Resignation", "Resilience", "Resiliency", "Resilient", "Resist", "Resistance", "resistor", "Resolute", "Resolution", "Resolve",
    "resonance", "Resonate", "Resort", "resource", "respect", "respectably", "Respectful", "respectfully", "Respective", "Respectively",
    "Respond", "response", "responsibility", "responsibly", "rest", "Restate", "restaurant", "restfully", "Restoration", "Restore",
    "Restraint", "Restrict", "Restriction", "result", "Result-oriented", "Resume", "Résumé", "Resurrect", "Retail", "Retain",
    "Reticent", "retire", "Retirement", "Retort", "Retreat", "Retrench", "Retrieve", "return", "Revamp", "Reveal",
    "Revel", "Revelation", "Revenge", "Revenue", "Revere", "Reverence", "Reverse", "Revert", "Review", "Revise",
    "Revision", "Revitalize", "Revival", "Revive", "Revoke", "Revolution", "Revolutionary", "Reward", "Rework", "Rhetoric",
    "rhyme", "Rhythm", "rice", "Rich", "richly", "Rid", "ride", "Ridiculous", "ridiculously", "Rifle",
    "Right", "right on", "righteously", "rightfully", "righthanded", "rightly", "rightwing", "Rigid", "rigidly", "Rigorous",
    "ring", "ringleader", "ringside", "ringworm", "rinse", "Riot", "Rip", "ripsaw", "Rise", "risk",
    "Risky", "Ritual", "Rival", "river", "riverbed", "riverside", "road", "roadbed", "roadrunner", "roadside",
    "roadway", "roar", "Rob", "Robbery", "Robust", "Rock", "Rocket", "rockfish", "rockhound", "rockslide",
    "Rod", "roger", "roger that", "ROI", "role", "roll", "rollback", "Romance", "roof", "Rookie",
    "room", "roommate", "Root", "rope", "Rose", "rosebud", "rosemary", "Roster", "rot", "Rotate",
    "Rotation", "Rough", "roughhouse", "Roughly", "roughneck", "Round", "roundup", "router", "Routine", "routinely",
    "row", "rowboat", "Rowdy", "royal", "Rub", "Rubber", "Rude", "rudely", "Rudimentary", "Ruin",
    "rule", "Ruling", "rumble", "Rumor", "Rumour", "run", "runaway", "runoff", "runtime", "runway",
    "Rural", "Rush", "ruthlessly", "Sack", "Sacred", "Sacrifice", "Sacrilege", "Sad", "sadly", "Sadness",
    "Safe", "safeguard", "safely", "safety", "sail", "sailboat", "sailfish", "Saint", "Sake", "salad",
    "salary", "sale", "salesman", "saleswoman", "Salient", "salt", "saltshaker", "saltwater", "Same", "Sample",
    "Sanction", "sand", "sandbar", "sandbox", "sandman", "sandpaper", "sandstorm", "sandwich", "Sane", "Satellite",
    "Satisfaction", "Satisfactory", "Satisfied", "Satisfy", "Saturate", "Saturation", "saucepan", "Save", "Saving", "savings",
    "savor", "saw", "sawdust", "sawhorse", "sawmill", "Say", "Scale", "Scandal", "Scarce", "scarcely",
    "Scare", "scarecrow", "scarily", "Scatter", "scatterbrain", "Scattered", "Scenario", "scene", "Sceptical", "Schedule",
    "schema", "Scheme", "Scholar", "Scholarship", "school", "schoolhouse", "schoolroom", "schoolteacher", "science", "scientifically",
    "Scintillating", "scoff", "scold", "scoot", "Scope", "scorch", "score", "Scourge", "scrapbook", "scrape",
    "Scratch", "Scream", "screech", "Screen", "Screening", "Screw", "screwdriver", "scribble", "script", "Scrupulous",
    "Scrutinize", "Scrutiny", "sea", "seabed", "seabird", "seaboard", "seabreeze", "seachange", "seacoast", "seafarer",
    "seafood", "seagoing", "seagrass", "seagull", "seahorse", "Seal", "sealion", "seaplane", "search", "searchengine",
    "searchingly", "searchlight", "seashell", "seashore", "seasick", "seaside", "season", "seastar", "Seat", "seatbelt",
    "seawall", "seaway", "seaweed", "seaworthy", "second", "secondhand", "Secondly", "secret", "secretary", "secretively",
    "section", "Sector", "Secular", "Secure", "securely", "security", "sedately", "sedimentary", "see", "see ya",
    "seedpod", "Seek", "Seeker", "Seemingly", "Segment", "segmentation", "Segregate", "Seize", "Seldom", "Select",
    "Selection", "Selective", "Self", "Selfish", "selfishly", "selflessly", "Sell", "semaphore", "semiconductor", "Seminar",
    "Senator", "Send", "Senior", "Sensation", "Sense", "Sensible", "Sensitive", "Sensitivity", "Sentence", "Sentiment",
    "Separate", "separately", "Separation", "Sequence", "Serial", "serialization", "series", "seriously", "serve", "service",
    "Session", "set", "Set-up", "setback", "setting", "Settle", "Settlement", "Settler", "Setup", "sever",
    "Severe", "Severely", "sew", "sex", "Sexuality", "Sexy", "Shade", "Shadow", "shake", "shakily",
    "Shallow", "Shame", "shamelessly", "shampoo", "Shape", "Shaped", "sharding", "share", "Shareholder", "Sharp",
    "sharply", "Shatter", "shave", "she", "Shed", "sheepdog", "sheepishly", "Sheer", "shellfish", "Shelter",
    "shh", "Shift", "shine", "Ship", "shipmate", "Shipping", "shipshape", "shipwreck", "shipyard", "shirt",
    "shiver", "Shock", "Shocked", "Shocking", "shoddily", "shoe", "shoehorn", "shoelace", "shoo", "Shoot"
]

list13 = [
    "Shooting", "shop", "shopkeeper", "shopping", "Shore", "shoreline", "Short", "Short-term", "Shortage", "shortbread",
    "shortcake", "Shorten", "shorthand", "Shortly", "shortstop", "Shot", "shoulder", "shout", "Show", "shower",
    "showman", "showoff", "shriek", "shrilly", "Shrink", "Shrug", "shucks", "shuffleboard", "shut", "shutdown",
    "shuteye", "shyly", "Sibling", "Sick", "side", "sideboard", "sidecar", "sidekick", "sideline", "sidestep",
    "sidestroke", "sideswipe", "sidetrack", "Sidewalk", "sideways", "Sigh", "sightseeing", "sightseer", "sign", "signal",
    "Signature", "Significance", "Significant", "Significantly", "Signify", "signpost", "Silence", "silently", "Silk", "silkworm",
    "silly", "silver", "silverware", "Simple", "Simplicity", "Simplify", "simply", "Simulate", "Simulation", "Simultaneous",
    "Simultaneously", "Sin", "since", "Sincere", "sincerely", "sing", "singe", "singer", "Single", "singsong",
    "singularly", "Sink", "sip", "sir", "sister", "sit", "site", "Situated", "situation", "size",
    "skateboard", "Skeptical", "Sketch", "skewness", "ski", "skill", "Skilled", "skillfully", "skin", "Skinny",
    "Skip", "skirt", "Skull", "sky", "skylight", "skyline", "skyrocket", "skyscraper", "skywriting", "Slam",
    "Slap", "slapstick", "Slash", "slaughterhouse", "Slave", "Slavery", "sledgehammer", "sleep", "sleep tight", "sleepily",
    "sleepwalker", "sleepyhead", "slice", "Slide", "Slight", "slightly", "slingshot", "Slip", "slipcover", "slipknot",
    "slipshod", "Slogan", "Slope", "Slot", "Slow", "slowly", "slyly", "Small", "smallpox", "smalltalk",
    "Smash", "smell", "smile", "smoke", "smokestack", "Smooth", "smoothly", "Snap", "snapdragon", "snapshot",
    "snarl", "snatch", "sneak", "sneer", "sneeze", "snicker", "sniff", "snoop", "snooze", "snore",
    "snort", "snow", "snowball", "snowboard", "snowbound", "snowdrift", "snowdrop", "snowfall", "snowflake", "snowplow",
    "snowshoe", "snowstorm", "snubnosed", "so", "so that", "So-called", "Soak", "soapstone", "Soar", "sob",
    "Sober", "Social", "Socialist", "society", "sock", "socket", "Soft", "softball", "softly", "software",
    "soil", "Solace", "Solar", "Sole", "Solely", "solemnly", "Solicit", "Solicitor", "solicitously", "Solid",
    "Solidarity", "solidly", "Solo", "Solution", "solvency", "solvent", "somebody", "someday", "Somehow", "someone",
    "someplace", "Something", "Sometime", "sometimes", "Somewhat", "somewhere", "son", "song", "songbird", "soon",
    "soothe", "Sophisticated", "Sophomore", "Sorrowful", "sorry", "sort", "Soul", "Sound", "soundproof", "soundtrack",
    "soup", "Sour", "source", "South", "southeast", "southwest", "sovereign", "Sovereignty", "sow", "soybean",
    "soysauce", "space", "spacecraft", "spaceship", "spacesuit", "Spam", "Span", "Spare", "spareribs", "Spark",
    "sparkle", "Sparse", "spasmodically", "speak", "speakeasy", "speaker", "special", "Specialise", "Specialist", "Specialize",
    "Specialized", "specially", "Species", "Specific", "specifically", "Specification", "Specify", "Specimen", "Spectacle", "Spectacular",
    "spectacularly", "Spectator", "spectrometry", "spectroscopy", "spectrum", "Speculate", "Speculation", "Speculative", "speech", "Speed",
    "speedily", "Spell", "spellbound", "Spend", "Sphere", "Spice", "Spill", "Spin", "Spine", "spirit",
    "Spiritual", "spiritually", "Spite", "splendidly", "Split", "Spoil", "spoilsport", "Spokesman", "Spokesperson", "Spokeswoman",
    "Sponsor", "Sponsorship", "Spontaneous", "sporadically", "sport", "Sporting", "sportscast", "sportscaster", "sportsman", "sportsmanship",
    "sportswriter", "Spot", "Spotlight", "Spouse", "spray", "Spread", "spring", "springboard", "springtime", "sprout",
    "sputter", "Spy", "spyglass", "Squad", "square", "squash", "Squeeze", "SSH", "SSL", "sssh",
    "Stab", "Stability", "Stabilize", "Stable", "stack", "staff", "Stage", "stagecoach", "stain", "staircase",
    "stairway", "Stake", "stakeholder", "Stall", "stammer", "stamp", "Stance", "Stand", "standard", "standby",
    "Standing", "standoff", "standpipe", "standstill", "star", "starboard", "Stare", "starfish", "stargazer", "Stark",
    "starlight", "starship", "Start", "Started", "startlingly", "startup", "Starve", "stash", "state", "statement",
    "stateside", "statesman", "Static", "statics", "station", "Statistical", "Status", "Stay", "Steadily", "Steady",
    "steak", "steal", "stealthily", "Steam", "steamboat", "steamroller", "steamship", "Steel", "Steep", "steeplechase",
    "Steer", "Stem", "stent", "Step", "stepbrother", "stepdaughter", "stepfather", "stepladder", "stepmother", "steppingstone",
    "stepsister", "stepson", "Stereotype", "sternly", "stick", "Sticky", "Stiff", "still", "Stimulate", "Stimulus",
    "stingray", "Stingy", "stipulate", "Stir", "stitch", "stochastic", "Stock", "stockbroker", "stockholder", "stockpile",
    "stoichiometry", "stomach", "stomachache", "stonewall", "stoneware", "stonework", "Stop", "stopwatch", "Storage", "store",
    "storehouse", "storekeeper", "storm", "Stormy", "story", "storyteller", "stow", "stowaway", "Straight", "straightedge",
    "Straightforward", "strain", "Strand", "stranger", "strap", "Strategic", "Strategize", "Strategy", "strawberry", "stray",
    "Stream", "streamline", "street", "streetcar", "Strength", "Strengthen", "strenuously", "stress", "stressfully", "Stretch",
    "Strict", "Strictly", "Strike", "Striking", "string", "Strip", "Strip (narrow piece)", "Strive", "Stroke", "Strong",
    "Strong-willed", "strongbox", "stronghold", "Structural", "structurally", "Structure", "Struggle", "strum", "strut", "Student",
    "studio", "studiously", "study", "Stuff", "Stumble", "Stun", "Stun v.", "Stunning", "stunt", "stupid",
    "stupidly", "Sturdy", "stutter", "style", "stylishly", "Subdue", "Subject", "submerge", "Submission", "Submissive"
]

list14 = [
    "Submit", "subnet", "subpoena", "Subscriber", "Subscription", "Subsequent", "Subsequently", "Subsidy", "substance", "Substantial",
    "Substantially", "Substantiate", "Substitute", "Substitution", "Subterfuge", "Subtle", "subtly", "Subtract", "Suburb", "Suburban",
    "Succeed", "Success", "successfully", "Succession", "Successive", "Successor", "Suck", "suddenly", "Sue", "suffer",
    "Suffering", "Sufficient", "Sufficiently", "sugar", "suggest", "suggestion", "Suicide", "suit", "suitably", "suitcase",
    "Suite", "Sum", "summer", "summertime", "Summit", "summons", "sun", "sunbonnet", "sunburn", "sundial",
    "sundown", "sundress", "sunfish", "sunflower", "sunglasses", "sunlight", "Sunny", "sunrise", "sunset", "sunshine",
    "sunspot", "sunstroke", "sunup", "sup", "Super", "Superb", "supercharged", "supercollider", "supercomputer", "superconductor",
    "Superficial", "superficially", "superfood", "supergiant", "superglue", "superheavyweight", "superhero", "superhighway", "superhuman", "superimpose",
    "Superintendent", "Superior", "superman", "supermarket", "supernatural", "supernova", "superposition", "supertanker", "superuser", "Supervise",
    "Supervision", "Supervisor", "superwoman", "Supplement", "Supplicate", "Supply", "Support", "Supportive", "suppose", "Supposedly",
    "supposing that", "Suppress", "Supreme", "supremely", "surely", "surfboard", "Surge", "Surgeon", "Surgery", "Surgical",
    "surmise", "Surmount", "Surpass", "Surpassing", "Surplus", "surprise", "surprisingly", "Surrender", "Surreptitious", "Surround",
    "Surrounding", "Surveillance", "Survey", "Survival", "Survivor", "Suspect", "Suspend", "Suspension", "Suspicion", "Suspicious",
    "suspiciously", "Sustain", "sustainability", "Sustainable", "Swallow", "swallowtail", "sway", "Swear", "sweatshirt", "Sweep",
    "Sweet", "sweetheart", "sweetly", "swiftly", "swim", "swimming", "swimsuit", "Swing", "switch", "swoop",
    "Sword", "swordfish", "SWOT", "Sycophant", "Symbolic", "Sympathetic", "sympathetically", "sympathize", "Sympathy", "Synchronize",
    "syndrome", "synergy", "syntax", "Synthesis", "Synthesize", "system", "Systematic", "systematically", "ta", "ta ta",
    "ta-da", "table", "tablecloth", "tableland", "tablesaw", "tablespoon", "tabletop", "Tackle", "Tactic", "Tactical",
    "Tag", "tailback", "tailspin", "take", "take that", "takeaway", "takeoff", "takeout", "takeover", "Tale",
    "talk", "Tall", "tally ho", "Tame", "Tangential", "Tangible", "Tank", "Tap", "tapeworm", "Target",
    "Targeted", "Tarnish", "task", "taste", "tattletale", "taunt", "tax", "taxicab", "taxon", "Taxpayer",
    "tch", "TCP", "tea", "Teach", "Teacher", "teaching", "teacup", "team", "teammate", "teapot",
    "Tear", "teardrop", "tearjerker", "tearoom", "tease", "teashop", "teaspoon", "teatime", "Technological", "technology",
    "Teen", "Teens", "telephone", "television", "tell", "telltale", "Temerity", "temperature", "Temple", "Temporarily",
    "Temporary", "Tempt", "Tenacious", "Tenant", "Tendency", "Tender", "tenderly", "tennis", "tensely", "tensile",
    "Tension", "tensor", "Tentative", "Tenuous", "Tenure", "tepidly", "Term", "Terminal", "Terminate", "Terms",
    "Terrain", "Terrible", "Terribly", "Terrific", "Terrify", "Territory", "Terror", "Terrorism", "Terrorist", "test",
    "Testify", "Testimony", "Testing", "text", "Textbook", "Texture", "than", "thank", "Thankfully", "thanks",
    "thanksgiving", "that", "thaw", "Theatrical", "Theft", "theme", "themselves", "Then", "Theology", "theorem",
    "Theoretical", "theorize", "theory", "Therapist", "Therapy", "there", "there there", "Thereafter", "Thereby", "thermodynamics",
    "Thesis", "Thick", "thighbone", "Thin", "thing", "think", "Thorough", "thoroughbred", "thoroughfare", "Thoroughly",
    "though", "thought", "Thought-provoking", "Thoughtful", "thoughtfully", "thread", "threadbare", "Threat", "Threaten", "threshold",
    "Thrilled", "Thrive", "throat", "through", "throughout", "throughput", "throw", "Thumb", "thumbnail", "thunder",
    "thunderbolt", "thunderclap", "thundercloud", "thunderstorm", "thunderstruck", "Thus", "tick", "ticket", "tickle", "Tide",
    "tideland", "Tidy", "tie", "Tight", "Tighten", "tightly", "tightrope", "till", "Timber", "Time",
    "time out", "Time-efficient", "timecard", "timekeeper", "timelapse", "timeline", "Timely", "timeout", "timepiece", "times",
    "timesaver", "timescale", "timesheet", "timetable", "timewarp", "timeworn", "Timid", "Timing", "Tiny", "tip",
    "tiptoe", "tire", "Tissue", "Title", "titration", "TLS", "to", "toadstool", "toast", "Tobacco",
    "today", "toe", "toenail", "Together", "token", "Tolerance", "Tolerant", "Tolerate", "Toll", "tombstone",
    "tomcat", "tomography", "tomorrow", "Ton", "Tone", "tongue", "tonight", "Tonne", "too", "toodles",
    "tool", "toolbox", "tooth", "toothbrush", "toothpaste", "toothpick", "Top", "topcoat", "topflight", "tophat",
    "topic", "topknot", "topology", "topsail", "topside", "topsoil", "topspin", "topstitch", "torque", "tort",
    "Torture", "Toss", "Total", "totally", "touch", "touchdown", "touche", "touchingly", "Tough", "tour",
    "tourist", "Tournament", "tow", "Toward", "towards", "towel", "tower", "town", "Toxic", "Trace",
    "Track", "trade", "Trademark", "tradeoff", "tradesman", "tradeunion", "Trading", "tradition", "traffic", "Tragedy",
    "Tragic", "Trail", "Trailer", "train", "trainer", "training", "Trait", "transaction", "Transcript", "transcriptome",
    "Transfer", "Transform", "Transformation", "transistor", "Transit", "Transition", "Transitory", "Translate", "translation", "Transmission",
    "Transmit", "Transparency", "Transparent", "transport", "Transportation", "Trap", "trash", "Trauma", "travel", "treadmill",
    "Treasure", "treat", "Treaty", "tree", "treetop", "tremble", "Tremendous", "tremendously", "Trenchant", "Trial",
    "Tribal", "Tribe", "Tribunal", "Tribute", "trick", "trickle", "Trigger", "triggerfish", "Trillion", "trim"
]

list15 = [
    "Trio", "Trip", "Triumph", "Trivial", "Trivialize", "Troop", "Trophy", "Tropical", "trot", "Trouble",
    "Troubled", "troublemaker", "trounce", "truck", "Truly", "Trust", "Trustee", "trustworthy", "Truth", "Truthful",
    "truthfully", "Try", "tryout", "tsk", "tsk-tsk", "Tsunami", "tug", "tugboat", "Tuition", "tumble",
    "tumbledown", "tumbleweed", "Tumors", "Tune", "Tunnel", "tuple", "turn", "turncoat", "Turnout", "Turnover",
    "turnpike", "turnstile", "turtleneck", "tut", "tut-tut", "twice", "Twist", "two", "type", "typeface",
    "typewriter", "Ubiquitous", "UDP", "ugh", "Ugly", "uh", "uh-oh", "Ultimate", "Ultimately", "um",
    "Unabashed", "unabashedly", "Unacceptable", "Unadmirable", "Unambitious", "Unanimous", "unanimously", "Unappealing", "Unappreciative", "Unassailable",
    "Unattractive", "Unaware", "Unbalanced", "unbearably", "unbelievably", "Unbiased", "Uncaring", "Uncertain", "Uncertainty", "uncle",
    "Uncomfortable", "Unconditional", "Unconscious", "Unconstitutional", "Uncontroversial", "Unconventional", "Unconvincing", "Uncreative", "Uncritical", "Undeniable",
    "Under", "underachieve", "underachiever", "underarm", "underclothing", "undercook", "undercover", "undercut", "underdog", "underdone",
    "Undergo", "Undergraduate", "underground", "undergrowth", "underhand", "Underlying", "Undermine", "underneath", "undersea", "undershirt",
    "Understand", "Understanding", "understated", "Undertake", "undertaker", "undervalue", "underwater", "underwear", "underweight", "underworld",
    "Undoubtedly", "undress", "unemotionally", "Unequal", "Unequivocal", "unethically", "Unexpected", "unexpectedly", "unfailingly", "Unfair",
    "Unfamiliar", "unfasten", "Unfathomable", "Unfavorable", "unfavorably", "Unfeeling", "Unfettered", "Unfold", "Unforeseen", "Unfortunate",
    "unfortunately", "Unfurl", "Unhelpful", "unicast", "uniformly", "Unify", "Unifying", "unilaterally", "Unimaginative", "Unimportant",
    "unimpressively", "Uninformed", "Uninspiring", "Unintelligent", "Union", "Unique", "unit", "Unite", "Unity", "Universal",
    "universally", "Universe", "university", "unkindly", "Unknown", "unless", "unlike", "Unlikely", "unlock", "Unmotivated",
    "unnaturally", "unnecessarily", "Unoriginal", "unpack", "Unprecedented", "Unpredictable", "Unproductive", "Unquestionable", "unquestionably", "Unravel",
    "Unrealistic", "Unrelenting", "Unreliable", "Unremarkable", "unselfishly", "unskillfully", "Unsophisticated", "Unstable", "Unstructured", "Unsupportive",
    "untie", "until", "unto", "Unveil", "Unwilling", "unwillingly", "Unwise", "Unworthy", "Unyielding", "Up",
    "upbeat", "upbringing", "Upcoming", "update", "updraft", "Upgrade", "uphill", "Uphold", "upkeep", "uplift",
    "upliftingly", "upload", "upon", "Upper", "uppermost", "upright", "uprising", "uproar", "uproot", "Upset",
    "upside-down", "upstage", "upstairs", "upstanding", "upstart", "upstate", "upstream", "upswing", "uptake", "uptown",
    "upturn", "upward", "upwardly", "Upwards", "upwelling", "upwind", "ur", "Urban", "Urge", "Urgent",
    "urgently", "urgh", "Usage", "use", "usefully", "Useless", "uselessly", "user", "username", "usual",
    "usually", "usurp", "Utility", "Utilization", "Utilize", "utter", "Utterly", "Vacant", "vacantly", "vacation",
    "vaccine", "Vacuum", "Vague", "vaguely", "vainly", "Valedictory", "valiantly", "Valid", "Validate", "Validation",
    "Validity", "Valuable", "Value", "Vanish", "vanquish", "Variable", "variance", "Variation", "Varied", "Variety",
    "Vary", "Vast", "vastly", "vector", "vectorization", "vegetable", "Vehement", "vehicle", "Vein", "velocity",
    "Venture", "Venue", "Verbal", "verbally", "Verbose", "verdict", "Verify", "Versatile", "Versatility", "Verse",
    "version", "Versus", "Vertical", "vertically", "Very", "very nice", "very well", "Vessel", "Veteran", "Vex",
    "Via", "Viability", "Viable", "Vibrant", "Vice", "Vicious", "viciously", "victoriously", "Victory", "video",
    "view", "Viewpoint", "vigilantly", "vigorously", "village", "Villager", "Villain", "Vindicate", "Vindictive", "vineyard",
    "Violate", "Violation", "Violence", "violently", "Virtual", "virtualization", "Virtue", "virus", "Visa", "viscosity",
    "Viscous", "Visible", "visibly", "Vision", "Visionary", "visit", "Visual", "Visualize", "visually", "Vital",
    "Vitamin", "vivaciously", "Vivid", "VLAN", "Vocal", "voice", "voila", "Volatile", "Volatility", "volleyball",
    "voltage", "voltmeter", "Volume", "voluntarily", "Voluntary", "Volunteer", "Voracious", "vote", "Voting", "vouch",
    "Vow", "vroom", "Vulnerability", "Vulnerable", "Wage", "wah", "wail", "waistcoat", "waistline", "wait",
    "Waiver", "wake", "walk", "walkingstick", "walkout", "walkway", "wall", "wallflower", "wallow", "wallpaper",
    "Wander", "Wanderlust", "Wane", "want", "War", "Ward", "wardrobe", "Warehouse", "Warfare", "Warm"
]

list16 = [
    "Whip", "whirl", "whirlpool", "whirlwind", "Whisper", "whistle", "White", "whitefish", "whitewall", "whitewash",
    "whoa", "Whoever", "whole", "whole-heartedly", "wholehearted", "wholesale", "Wholesome", "Wholly", "Whom", "whomever",
    "whoo", "whoopee", "whoops", "whoopsy", "why", "wickedly", "Wide", "Widely", "Widen", "widescreen",
    "Widespread", "Widow", "Width", "wife", "wiggly", "Wild", "wildcat", "wildfire", "wildflower", "Wildlife",
    "wildly", "will", "Willful", "willfully", "Willing", "willingly", "Willingness", "Willpower", "Win", "Wind",
    "windbreaker", "windfall", "windmill", "window", "windowpane", "windowsill", "windpipe", "windshield", "windsock", "windstorm",
    "windswept", "windward", "wine", "wing", "wingspan", "wingspread", "wink", "winner", "Winnow", "winter",
    "wintertime", "Wipe", "Wire", "wiretap", "Wisdom", "Wise", "wisecrack", "wisely", "wish", "wishbone",
    "Wit", "witchcraft", "With", "Withdraw", "Withdrawal", "withhold", "within", "Without", "Withstand", "Witness",
    "wobble", "woefully", "Wolf", "wolfhound", "wolfsbane", "Woman", "wonder", "Wonderful", "wonderfully", "wonderland",
    "wood", "woodcarver", "woodchuck", "woodcutter", "woodland", "woodpecker", "woodsman", "woodwork", "word", "Work",
    "workbench", "workbook", "workday", "worker", "Workforce", "workhorse", "working", "workman", "workmanlike", "Workout",
    "Workplace", "workroom", "Workshop", "workstation", "worktable", "world", "worldwide", "Worm", "worriedly", "worry",
    "Worse", "Worship", "Worst", "Worth", "worthily", "Worthless", "Worthwhile", "Worthy", "Wound", "wow",
    "Wrap", "wreck", "wrestle", "wriggle", "Wrist", "wristwatch", "write", "writer", "writhe", "writing",
    "Wrong", "wrongdoing", "wrongly", "wuzzup", "x-ray", "Xenophobia", "ya", "yachtsman", "yard", "yardarm",
    "yardstick", "yea", "yeah", "year", "yearbook", "yearly", "Yearning", "yearningly", "yech", "Yell",
    "yellow", "yellowtail", "yesterday", "Yet", "yield", "Yielding", "yikes", "yippee", "yo", "Yoke",
    "yoo-hoo", "you", "you bet", "you don't say", "you know", "Young", "Youngster", "yourself", "youth", "youthfully",
    "yow", "yum", "yummy", "zanily", "zap", "Zeal", "Zealous", "zealously", "Zephyr", "Zest",
    "Zestful", "zestfully", "zestily", "zigzag", "zip", "Zone", "zookeeper", "zoom", "zounds", "zowie",
    "zzz"
]


# run = list1 done  
# run = list2 done 
# run = list3 done
# run = list4 done 
# run = list5 done 
# run = list6 done 
# run = list7 done 
# run = list8 done 
run = list9  
# run = list10  
# run = list11  
# run = list12 
# run = list13   
# run = list14  
# run = list15  
# run = list16 



pyautogui.FAILSAFE = False

time.sleep(8)
pyautogui.press('enter')

pygame.mixer.init()

def play_sound(sound_path):
    pygame.mixer.music.load(sound_path)
    pygame.mixer.music.play()
    while pygame.mixer.music.get_busy():
        pygame.time.Clock().tick(10)

base_image_path = r'C:\chatgpt-automation'
sound_path = os.path.join(base_image_path, 'sound.mp3')
load_complete_image = os.path.join(base_image_path, 'load_complete.png')
copy_button_image = os.path.join(base_image_path, 'copy_button.png')

time.sleep(10) 
pyautogui.press('enter')

WAIT_TIMEOUT = 300 

for i in range(0, len(run), 10):
    if keyboard.is_pressed('ctrl+c'):
        print("Stopping the script.")
        break

    words_batch = run[i:i+10]
    words_string = ', '.join(words_batch)

    pyautogui.typewrite(
    words_string + '. ' + 
    'Skip the word if it doesn\'t apply. ' +
    'SQL database insert format. ' +
    'Ensure that the answer choices are of similar length, ' +
    'with the correct answer being the same length or shorter than the incorrect ones to avoid it standing out. ' +
    'Make sure the incorrect answers are unique, ' +
    'contextually relevant, use real words, and are not repeated across multiple choices. ' +
    'Each answer should sound plausible but not be the correct choice. ' +
    'The explanation should be based on the correct answer, ' +
    'explaining why it is the right answer and why the others are not. ' +
    'For example, explain why the correct answer fits the context best, and the incorrect answers are less suitable.'
    )



    time.sleep(5)
    pyautogui.press('enter')
    time.sleep(2)
    pyautogui.press('enter')

    start_time = time.time()

    while True:
        try:
            location = pyautogui.locateOnScreen(load_complete_image, confidence=0.8)
        except Exception as e:
            print(f"Error locating load complete image: {e}")
            location = None

        if location:
            print("Load complete image found. Continuing...")
            break

        if time.time() - start_time > WAIT_TIMEOUT:
            print(f"Timeout: Could not find load complete image within {WAIT_TIMEOUT} seconds.")
            play_sound(sound_path)
            break

        print("Waiting for load complete image...")
        time.sleep(1)

    try:
        location = pyautogui.locateOnScreen(copy_button_image, confidence=0.8)
    except Exception as e:
        print(f"Error locating copy button image: {e}")
        location = None

    if location:
        center = pyautogui.center(location)
        pyautogui.click(center)
        print("Clicked on copy button.")
        time.sleep(2)
    else:
        print("Copy button not found on screen.")
        play_sound(sound_path)
        time.sleep(1)

    pyautogui.keyDown('alt')
    pyautogui.press('tab')
    time.sleep(1)
    pyautogui.keyUp('alt')
    time.sleep(1)

    pyautogui.press('enter')
    pyautogui.hotkey('ctrl', 'v')
    pyautogui.press('enter')
    time.sleep(1)

    pyautogui.keyDown('alt')
    pyautogui.press('tab')
    time.sleep(1)
    pyautogui.keyUp('alt')

print("All words processed. Exiting script.")
pyautogui.keyDown('alt')
pyautogui.press('tab')
time.sleep(1)
pyautogui.keyUp('alt')
play_sound(sound_path)
